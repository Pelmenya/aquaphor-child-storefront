class ProductCounter {
  constructor(props) {
    this.input = props.input;
    this.plus = props.plus;
    this.minus = props.minus;
    this.update = props.update;
    this.create = this.create.bind(this);
    this.increment = this.increment.bind(this);
    this.decrement = this.decrement.bind(this);
    this.updateCart = this.updateCart.bind(this);
  }

  create() {
    this.plus.addEventListener('click', this.increment);
    this.minus.addEventListener('click', this.decrement);
  }

  increment() {
    this.input.value = String(Number(this.input.value) + 1);
    this.updateCart();
  }

  decrement() {
    this.input.value = String(Number(this.input.value) - 1);
    this.updateCart();
  }

  updateCart() {
    jQuery(this.update).attr('disabled', false).trigger('click');
  }
}

function setSmartPhoneScript() {

  const updateBtn = document.querySelector('button.button');
  updateBtn.addEventListener('click', (e) => console.log(e));
  const inputsWrap = document.querySelectorAll('.cart-smart-phone__counter-wrap');
  const wraps = [];
  inputsWrap.forEach((item) => {
    const productCounter = new ProductCounter({
      plus: item.querySelector('.plus'),
      input: item.querySelector('input.cart-smart-phone__counter'),
      minus: item.querySelector('.minus'),
      update: updateBtn,
    });
    productCounter.create();
    wraps.push(productCounter);
  });
}

function main() {
  if (window.screen.width < 450) setSmartPhoneScript();
}

main();
