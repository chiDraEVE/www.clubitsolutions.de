import '../sass/style.scss'

console.log("test")

// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
	module.hot.accept()
}