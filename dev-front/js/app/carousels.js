import $ from 'jquery'
import { GnCarousel } from '../components/gn-carousel'
window.$ = window.jQuery = $

const SELECTORS = {
  component_1: '.js-carousel--1',
  component_2: '.js-carousel--2',
  component_3: '.js-carousel--3',
  component_4: '.js-carousel--4',
  component_5: '.js-carousel--5'
}

let counter = 1
const ins = {}

for (const instance in SELECTORS) {
  ins[instance] = [document.querySelectorAll(SELECTORS[instance])]

  if (ins[instance].length) {
    const OPTIONS = {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      infinite: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: counter,
            slidesToScroll: counter,
            dots: true
          }
        }
      ]
    }

    for (const component of ins[instance]) {
      if (component.length) {
        const slickInstance = new GnCarousel($(component), OPTIONS)
        slickInstance.initCarousel()
      }
    }
  }
  counter++
}
