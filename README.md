# Mi Tienda - Plataforma de Comercio Electrónico con Laravel 🛒

Bienvenido a Mi Tienda, una plataforma de comercio electrónico desarrollada en Laravel. Este proyecto tiene como objetivo proporcionar una base sólida para la creación de tiendas en línea y está diseñado para ser utilizado como código abierto, permitiendo a la comunidad contribuir y mejorar constantemente.

## Características Principales 🚀

- **Laravel y Jetstream:** Desarrollado sobre el potente framework Laravel, con la adición de Jetstream para la autenticación y funcionalidades básicas del usuario.

- **Spatie Laravel Permission:** Sistema robusto de control de acceso basado en roles y permisos, proporcionado por la popular biblioteca Laravel Permission de Spatie.

- **Internacionalización (I18n):** Admite múltiples idiomas para llegar a una audiencia global. Utilizamos Laravel Lang para facilitar la gestión de los archivos de idioma.

## Requisitos Previos ⚙️

Asegúrate de tener instalados los siguientes requisitos antes de comenzar:

- PHP >= 8.1
- Composer
- Node.js y npm
- MySQL o cualquier otro sistema de gestión de bases de datos compatible con Laravel

## Instalación 🛠️

1. Clona este repositorio: `git clone https://github.com/gaher1096/mi-tienda.git`
2. Navega al directorio del proyecto: `cd mitienda`
3. Copia el archivo de configuración: `cp .env.example .env`
4. Configura tu archivo `.env` con la información de tu base de datos y otros detalles.
5. Instala las dependencias de Composer: `composer install`
6. Genera la clave de aplicación: `php artisan key:generate`
7. Ejecuta las migraciones: `php artisan migrate`
8. Instala las dependencias de npm: `npm install && npm run dev`
9. Inicia el servidor: `php artisan serve`

¡Listo! Ahora puedes acceder a tu tienda en [http://localhost:8000](http://localhost:8000).

### Seeder para la Inicialización del Sistema 🌱

Este proyecto incluye un seeder principal que invoca a los seeders específicos para la inicialización del sistema. Para ejecutar los seeders, utiliza el siguiente comando:

```bash
php artisan db:seed

```

## Tabler Icons

Hemos incorporado Tabler Icons a nuestro proyecto para mejorar la experiencia visual y la estética general. Los iconos se utilizan en diversas partes de la interfaz de usuario para proporcionar una representación visual más clara de las acciones y elementos.

### Integración

Los iconos de Tabler están integrados directamente en nuestro proyecto y se utilizan mediante [nombre del componente/icono]. Puedes encontrar la lista completa de iconos disponibles en la 📚 [documentación oficial de Tabler Icons](https://tabler.io/icons).

### Personalización

Si deseas personalizar los iconos o ajustar su apariencia, puedes consultar la  📚[documentación de Tabler Icons](https://tabler.io/docs/icons) para obtener instrucciones detalladas sobre cómo hacerlo.

Para más detalles, consulta la 📚 [documentación de Tabler Icons](https://tabler.io/docs/icons).

## Contribución 🤝

¡Gracias por considerar contribuir a Mi Tienda! Si deseas contribuir, sigue estos pasos:

1. Realiza un fork del proyecto.
2. Crea una nueva rama para tu funcionalidad: `git checkout -b feature/nueva-funcionalidad`
3. Realiza tus cambios y haz commit: `git commit -m "Añade nueva funcionalidad"`
4. Haz push a tu rama: `git push origin feature/nueva-funcionalidad`
5. Abre un Pull Request en [https://github.com/gaher1096/mi-tienda](https://github.com/gaher1096/mi-tienda)

## Problemas y Sugerencias ❗

Si encuentras algún problema o tienes alguna sugerencia, por favor, abre un issue en el [rastreador de problemas](https://github.com/gaher1096/mi-tienda/issues).

## Licencia 📄

Este proyecto está bajo la Licencia MIT - consulta el archivo [LICENSE](LICENSE) para más detalles.

¡Esperamos que disfrutes utilizando Mi Tienda para construir tu propia tienda en línea!
