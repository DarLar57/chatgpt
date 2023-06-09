// for the form to select Product Type
const HOBBY = $("#hobby");

$(document).ready(() => {
  HOBBY.on("change",() => {
    select();
  });
  select();
});

const select = () => {
  switch (HOBBY.val()) {
    case 'other': 
    {
      $("#other_hobby_input").show();
      break;
    }
    default: 
    {
      $("#other_hobby_input").hide();
      break;
    }
  }
};

