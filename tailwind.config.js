/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./**/*.php", "./src/**/*.js"],
	theme: {
		extend: {},
	},
	plugins: [require("@tailwindcss/typography")],
};
