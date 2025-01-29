# 🧗 WithClimb  
**WithClimb** es una plataforma web para escaladores que permite calificar y comentar sobre vías de escalada, conectar con otros entusiastas y encontrar restaurantes cercanos con filtros personalizados. Desarrollada con **Symfony y MySQL**, ofrece una experiencia fluida y moderna para los amantes de la escalada.  

---

## ✨ Características  

🏕️ **Perfiles de usuario**: Crea y personaliza tu perfil de escalador.  
⭐ **Valoración de vías**: Califica y comenta rutas de escalada.  
💬 **Interacción social**: Conéctate con otros escaladores.  
🍽️ **Restaurantes cercanos**: Encuentra lugares para comer con filtros personalizados.  
📍 **Mapas interactivos**: Descubre nuevas rutas de escalada.  
🔑 **Autenticación**: Registro, inicio de sesión y roles de usuario.  
📱 **Diseño responsive**: Optimizado para móviles, tablets y computadoras.  

---

## 🛠️ Requisitos  

🐘 **PHP** 8.1+  
🎼 **Composer** 2.x  
🎛️ **Symfony CLI** (opcional)  
🌐 **Servidor web** (Apache/Nginx)  
💾 **Base de datos** MySQL  

---

## 🚀 Instalación rápida  

```bash
git clone https://github.com/Yen-rod/WithClimb.git && cd WithClimb
composer install
cp .env .env.local  # Configurar credenciales de BD en .env.local
php bin/console doctrine:migrations:migrate
symfony server:start

