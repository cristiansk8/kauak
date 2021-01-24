const CLASSES = {
  animIn: 'slide-down',
  animOut: 'slide-up',
  activeMenu: 'navbar--sticky',
  openMenu: 'navbar--open'
}

const SELECTORS = {
  toggler: '.js-menu-toggler'
}

class Navbar {
  constructor (context) {
    this.context = context
    this.toggler = null
    this.visible = true
    this.bannerHeight = context.clientHeight
    this.offset = 0
    this.refoffset = 0
  }

  init () {
    this.toggler = this.context.querySelector(SELECTORS.toggler)
    this.subscribe()
  }

  subscribe () {
    window.addEventListener('scroll', () => {
      this.handleScroll()
    })

    this.toggler.addEventListener('click', () => {
      this.handleToggle(this.context)
    })
  }

  handleScroll () {
    this.offset = window.scrollY

    if (this.offset > this.bannerHeight) {
      // Menu out of view
      if (this.offset >= this.refoffset) {
        this.context.classList.remove(CLASSES.animIn)
        this.context.classList.remove(CLASSES.activeMenu)
        this.context.classList.add(CLASSES.animOut)
      } else if (this.offset < this.refoffset) {
        this.context.classList.remove(CLASSES.animOut)
        this.context.classList.add(CLASSES.animIn)
        this.context.classList.add(CLASSES.activeMenu)
      }

      this.refoffset = this.offset
    } else {
      this.context.classList.remove(CLASSES.activeMenu)
    }
  }

  handleToggle (wrapper) {
    wrapper.classList.toggle(CLASSES.openMenu)
  }
}

export {
  Navbar
}
