import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // Define your dark mode colors here
                dark: {
                    bg: "#1a202c", // Dark background color
                    text: "#ffffff", // White text color
                    // Add more custom dark mode colors as needed
                },
            },
            // Apply dark mode to various parts of the theme
            darkSelector: ".dark-mode",
        },
    },

    plugins: [forms],
};
