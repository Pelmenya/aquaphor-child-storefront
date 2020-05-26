/*
class SystemComponent {
  constructor(props) {}

  create() {}
}

class System {
  constructor(props) {}

  create() {}

  clearWater(parametrs) {}
}
*/

function main() {
  // ?add-to-cart=548
  //  const urlReq = 'aquaphor.store/?add-to-cart=548';
  // const req = new Request(urlReq, { method: 'POST' });
  /*
  fetch(req).then((res) => res.json()).then((res) => console.log(res)).catch((err) => {
    console.log(err);
  });
 //  fetch(req).then((res) => res.json(console.log(res)));
  console.log(window.filterCases);
  console.log(window.filters);
  console.log(window.systems);
  console.log(window.filterCases[0].product);
          console.log(window.systems[i].attributes[j][2]);
        console.log(window.systems[i].attributes[j][3]);
        console.log(window.systems[i].attributes[j][4]);

  */ //  fetch(req).then((res) => res.json(console.log(res)));
  console.log(window.systems);

  const equipmentSelectionForm = document.querySelector('.equipment-selection__form');
  const waterPoints = equipmentSelectionForm.pa_water_points;
  const equipmentSelectionChoiceColorLabel = equipmentSelectionForm.querySelector(
    'label.equipment-selection__choice-color_water-points'
  );
  const equipmentSelectionCalculateBtn = equipmentSelectionForm.querySelector(
    '.equipment-selection__calculate-button'
  );
  // Radio button
  const paClearTurbidityRadioBtn = equipmentSelectionForm.pa_clear_turbidity;
  const choiceTasteRadioBtn = equipmentSelectionForm.choiceTaste;
  const equipmentSelectionTable = equipmentSelectionForm.querySelector(
    '.equipment-selection__table'
  );
  // Все input в таблице
  const allTableInputs = equipmentSelectionTable.querySelectorAll(
    '.equipment-selection__elem-value'
  );

  function changeWaterPoints() {
    switch (Number(waterPoints.value)) {
      case 1:
        equipmentSelectionChoiceColorLabel.textContent = 'одна';
        break;
      case 2:
        equipmentSelectionChoiceColorLabel.textContent = 'две';
        break;
      case 3:
        equipmentSelectionChoiceColorLabel.textContent = 'три';
        break;
      case 4:
        equipmentSelectionChoiceColorLabel.textContent = 'четыре';
        break;
      case 5:
        equipmentSelectionChoiceColorLabel.textContent = 'пять';
        break;
      case 6:
        equipmentSelectionChoiceColorLabel.textContent = 'шесть';
        break;
      default:
        equipmentSelectionChoiceColorLabel.textContent = 'одна';
    }
  }

  function inputEquipmentSelectionForm() {
    equipmentSelectionCalculateBtn.disabled = true;
    let valid = true;
    if (paClearTurbidityRadioBtn.value !== '' && choiceTasteRadioBtn.value !== '') {
      // нет ни одного такого, что пуст или не приобразуется в число
      valid = !Object.keys(allTableInputs).some(
        (index) =>
          Number.isNaN(Number(allTableInputs[index].value)) || allTableInputs[index].value === ''
      );
    } else valid = false;
    if (valid) {
      equipmentSelectionCalculateBtn.disabled = false;
    }
  }

  function submitEquipmentSelectionForm(event) {
    const dataForm = [];
    console.log(dataForm);
    dataForm.push({
      name: paClearTurbidityRadioBtn[0].name,
      value: paClearTurbidityRadioBtn.value,
    });
    dataForm.push({ name: choiceTasteRadioBtn[0].name, value: choiceTasteRadioBtn.value });
    dataForm.push({ name: waterPoints.name, value: waterPoints.value });
    Object.keys(allTableInputs).forEach((index) =>
      dataForm.push({
        name: allTableInputs[index].name,
        value: allTableInputs[index].value,
      })
    );

    /** проверяем все введеные в форму значения на соответствие диапазона каждого аттрибута
     * каждой системы. Затем берем только те системы, у которых все атрибуты подходят
     * под введеные значения, далее если есть системы то сортируем или ищем с наименьшей
     * стоимостью, нет выводим сообщение */
    for (let i = 0; i < window.systems.length; i += 1) {
      for (let j = 2; j < window.systems[i].attributes.length; j += 1) {
        for (let k = 2; k < dataForm.length; k += 1) {
          if (dataForm[k].name === window.systems[i].attributes[j][2]) {
            if (
              Number(window.systems[i].attributes[j][3] <= Number(dataForm[k].value)) &&
              Number(dataForm[k].value) <= Number(window.systems[i].attributes[j][4])
            ) {
              window.systems[i].attributes[j].push(true);
            } else {
              window.systems[i].attributes[j].push(false);
            }
          }
        }
      }
    }
    const okSystems = [];
    for (let i = 0; i < window.systems.length; i += 1) {
      let valid = false;
      for (let j = 2; j < window.systems[i].attributes.length; j += 1) {

      }
    }
    event.preventDefault();
  }
  // бегунок
  waterPoints.addEventListener('change', changeWaterPoints);
  // ввод на форме
  equipmentSelectionForm.addEventListener('input', inputEquipmentSelectionForm);
  // submit формы
  equipmentSelectionForm.addEventListener('submit', submitEquipmentSelectionForm);
}

main();
