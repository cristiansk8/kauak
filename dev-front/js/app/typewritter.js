const malarkey = require('malarkey')
const elementsHero = [...document.querySelectorAll('.typewriter--hero')]
const elements = [...document.querySelectorAll('.typewriter')]
const optionsHero = {
  typeSpeed: 200,
  deleteSpeed: 50,
  pauseDuration: 2000,
  repeat: false
}

const options = {
  typeSpeed: 100,
  deleteSpeed: 50,
  pauseDuration: 2000,
  repeat: false
}

elementsHero.forEach(el => {
  const typeText = el.textContent
  const callback = (text) => {
    el.textContent = text
  }

  malarkey(callback, optionsHero)
    .type(typeText) // type
    .pause() // pause
})

elements.forEach(el => {
  const typeText = el.textContent
  const callback = (text) => {
    el.textContent = text
  }

  malarkey(callback, options)
    .type(typeText) // type
    .pause() // pause
})
