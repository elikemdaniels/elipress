# EliPress WordPress Starter Theme

EliPress is a modern and lightweight WordPress starter theme built with Tailwind CSS, Alpine.js, GSAP, and Swiper.js. It provides a solid foundation for building custom WordPress websites with a focus on performance and developer experience. The theme is designed to be highly customizable, allowing you to easily enable or disable specific JavaScript libraries and add new ones as needed.

## Features

- **Tailwind CSS**: A utility-first CSS framework for rapidly building custom user interfaces.
- **Alpine.js**: A lightweight JavaScript framework for adding interactivity to your website (can be disabled or enabled in `functions.php`).
- **GSAP**: A robust JavaScript animation library for creating smooth and complex animations (can be disabled or enabled in `functions.php`).
- **Swiper.js**: A modern and flexible slider/carousel library with excellent touch support (can be disabled or enabled in `functions.php`).
- **Custom Gutenberg Blocks**: Custom Gutenberg blocks for extending the WordPress editor functionality (built with ACF Pro).
- **Optimized for Performance**: The theme is optimized for performance with minified CSS and JavaScript files, and jQuery is disabled on the frontend.
- **Highly Customizable**: The theme is designed as a starter theme, allowing you to easily enable or disable specific JavaScript libraries and add new ones as needed.
- **Consistent Editing Experience**: Scripts and styles are enqueued for both the frontend and the editor, providing a smooth one-to-one visual experience during development.

## Requirements

- An active license for [Advanced Custom Fields Pro (ACF Pro)](https://www.advancedcustomfields.com/pro/) is required to use the custom Gutenberg blocks included in the theme.

## Getting Started

To get started with the EliPress starter theme, follow these steps:

1. Clone the repository or download the ZIP file.
2. Navigate to the theme directory: `cd /path/to/elipress`
3. Install the required dependencies: `npm install`

## Development

During development, you can use the following commands:

- `npm run start`: Starts the development server, watches for file changes, and automatically reloads the browser.
- `npm run build`: Builds the production-ready CSS and JavaScript files.

The theme enqueues scripts and styles for both the frontend and the editor, ensuring a consistent visual experience during development. This means that the styles and interactivity you see in the WordPress editor will match the frontend of your website, providing a seamless one-to-one editing experience.

## Building Blocks

The EliPress starter theme includes the following custom Gutenberg blocks (built with ACF Pro):

- **Testimonial Block**: A block for displaying testimonials with author information.

## Customization

You can customize the theme by modifying the following files:

- `src/js/alpine.js`: The Alpine.js file for adding interactivity to your website (can be enabled or disabled in `functions.php`).
- `src/js/gsap.js`: The GSAP file for creating animations (can be enabled or disabled in `functions.php`).
- `src/js/swiper.js`: The Swiper.js file for creating sliders and carousels (can be enabled or disabled in `functions.php`).
- `src/index.js`: The main JavaScript file where you can import and initialize third-party libraries or add your own custom scripts.
- `src/css/frontend.css`: The CSS file for customizing the frontend styles of your website.
- `src/css/backend.css`: The CSS file for customizing the styles in the WordPress editor.

## Deployment

To deploy the EliPress starter theme to a production environment, follow these steps:

1. Run `npm run build` to generate the minified CSS and JavaScript files.
2. Run `npm run zip` to zip the theme directory, excluding the `node_modules` folder and other development files.
3. Upload the generated ZIP file to your WordPress installation and activate the theme.
4. Install required plugins.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request.

## License

The EliPress WordPress starter theme is open-source software licensed under the [MIT License](https://opensource.org/licenses/MIT).
