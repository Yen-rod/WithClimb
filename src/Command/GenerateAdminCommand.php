<?php

namespace App\Command;

use App\Entity\Usuarios;
use App\Repository\UsuariosRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(
    name: 'app:create-admin',
    description: 'Add a short description for your command',
)]
class GenerateAdminCommand extends Command
{
    public function __construct(
        private readonly UsuariosRepository $usuariosRepository,
        private readonly UserPasswordHasherInterface $passwordHasher
    )
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('username', InputArgument::REQUIRED, 'Nombre del usuario administrador')
            ->addArgument('email', InputArgument::REQUIRED, 'Email de usuario administrador')
            ->addArgument('password', InputArgument::REQUIRED, 'Contraseña del usuario administrador')

        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $username = $input->getArgument('username');
        $email = $input->getArgument('email');
        $password = $input->getArgument('password');

        // Validar email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $io->error('El email proporcionado no es válido.');
            return Command::FAILURE;
        }
        // Comprobar si ya existe un usuario con el mismo email
        if ($this->usuariosRepository->findOneBy(['email' => $email])) {
            $io->error('Ya existe un usuario con este email.');
            return Command::FAILURE;
        }

        //creación nuevo usuario administrativo
        $admin = new Usuarios();
        $admin->setNombre($username);
        $admin->setEmail($email);
        $admin->setVerificado(true);

        //hashear la contraseña
        $hashedPassword = $this->passwordHasher->hashPassword($admin, $password);
        $admin->setPassword($hashedPassword);

        $admin->setRoles(['ROLE_ADMIN']);

        $this->usuariosRepository->store($admin);

        $io->success('Enhorabuena! Has creado un nuevo usuario administrador.');

        return Command::SUCCESS;
    }
}
