import { Navbar } from '../components/nav_menu'

const SELECTORS = {
  menu: '.js-menu'
}

const instance = [...document.querySelectorAll(SELECTORS.menu)]

if (instance.length) {
  const menuInstance = new Navbar(instance[0])
  menuInstance.init()
}
