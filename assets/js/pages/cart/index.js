const productsCounters = [];

function disabledButtons() {
  productsCounters.forEach((item) => {
    const productCounter = item;
    productCounter.plus.disabled = true;
    productCounter.minus.disabled = true;
  });
}

class ProductCounter {
  constructor(props) {
    this.input = props.input;
    this.plus = props.plus;
    this.minus = props.minus;
    this.update = props.update;
    this.disabledButtons = props.disabled;
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
    this.disabledButtons();
    this.updateCart();
  }

  decrement() {
    this.input.value = String(Number(this.input.value) - 1);
    this.disabledButtons();
    this.updateCart();
  }

  updateCart() {
    jQuery(this.update).attr('disabled', false).trigger('click');
  }
}

function setSmartPhoneScript() {
  // удаляем темплейт для desktop версии)

  const desktop = document.querySelector('.cart-desktop');
  desktop.parentNode.removeChild(desktop);

  // - высота хедера - высота футера
  if (document.querySelector('.site-content').offsetHeight < window.screen.height - 58 - 65) {
    document.querySelector('.site-content').style.height = `${window.screen.height - 58 - 65}px`;
  }

  const emptyCart = document.querySelector('.empty-cart-smart-phone');
  if (emptyCart) {
    document.querySelector('.site-content').style.marginBottom = '0px';
    document.querySelector('.site-content').style.height = 'auto';
  }

  const updateBtn = document.querySelector('button.button');
  const inputsWrap = document.querySelectorAll('.cart-smart-phone__counter-wrap');
  inputsWrap.forEach((item) => {
    const productCounter = new ProductCounter({
      plus: item.querySelector('.plus'),
      input: item.querySelector('input.cart-smart-phone__counter'),
      minus: item.querySelector('.minus'),
      update: updateBtn,
      disabled: disabledButtons,
    });
    productCounter.create();
    productsCounters.push(productCounter);
  });
}

function setDeskTopScript() {
  const smart = document.querySelector('.cart-smart-phone');
  smart.parentNode.removeChild(smart);
  const updateCart = document.querySelector('button.button');
  updateCart.addEventListener('click', () => {
    window.location.href = 'cart';
  });
  const inputs = document.querySelectorAll('input.qty');
  Object.keys(inputs).forEach((item) => {
    inputs[item].type = 'number';
    inputs[item].readOnly = false;
  });
}

function main() {
  if (window.screen.width < 450) setSmartPhoneScript();
  else setDeskTopScript();
}

main();
