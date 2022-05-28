module.exports = {
	content: ["./application/views/**/*.{php,html}"],
	theme: {
		fontFamily: {
			mulish: ["Mulish", "sans-serif"],
		},
		extend: {
			spacing: {
				"4px": "4px",
				"8px": "8px",
				"12px": "12px",
				"14px": "14px",
				"16px": "16px",
				"24px": "24px",
				"32px": "32px",
				"48px": "48px",
			},
		},
		screens: {
			sm: "480px",
			md: "768px",
			lg: "976px",
			xl: "1440px",
		},
		colors: {
			"light-grey": "#fffffffa",
			gray: "#727586",
			primary: "#fc5185",
			white: "#ffffff",
			"dark-blue": "#2F1C6A",
			purple: "#53f",
			"light-purple": "#D5DFFF",
			"dark-navy": "#36344D",
			"ghost-white": "#FAFBFF",
		},
	},
	plugins: [],
};
