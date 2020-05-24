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
*/ //  fetch(req).then((res) => res.json(console.log(res)));
  console.log(filterCases);
  console.log(filters);
  console.log(systems);

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
        (index) => Number.isNaN(Number(allTableInputs[index].value)) || allTableInputs[index].value === ''
      );
    } else valid = false;

    if (valid) {
      equipmentSelectionCalculateBtn.disabled = false;
    }
  }

  // бегунок
  waterPoints.addEventListener('change', changeWaterPoints);
  // ввод на форме

  equipmentSelectionForm.addEventListener('input', inputEquipmentSelectionForm);
}

main();
