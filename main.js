//MAIN JS

//Listen for form submit
document.getElementById("signin").addEventListener("submit", submitForm);
document.getElementById("signup").addEventListener("submit", submitForm);

//get values 	
function submitForm(){
var Name = getInputVal("Name");
var Username = getInputVal("Username");
var Age = getInputVal("Age");
var Email = getInputVal("Email");
var Password = getInputVal("Password");
changename();

}

function changename(){
  document.getElementById("avatarname").innerHTML = document.getElementById("Name").innerHTML;  
  document.getElementById("avatarage").innerHTML = document.getElementById("Age").innerHTML;  
  document.getElementById("avataremail").innerHTML = document.getElementById("Email").innerHTML;  
}



//DASHBOARD JS



function func(){
  document.getElementById("myprofile").style.display = "flex";
  document.getElementById("members").style.display = "none";
  document.getElementById("trainers").style.display = "none";
  document.getElementById("attendance").style.display = "none";
  document.getElementById("routine").style.display = "none";
  document.getElementById("bmi").style.display = "none";
}

function func1(){
  document.getElementById("myprofile").style.display = "none";
  document.getElementById("members").style.display = "flex";
  document.getElementById("trainers").style.display = "none";
  document.getElementById("attendance").style.display = "none";
  document.getElementById("routine").style.display = "none";
  document.getElementById("bmi").style.display = "none";
}

function func2(){
  document.getElementById("myprofile").style.display = "none";
  document.getElementById("members").style.display = "none";
  document.getElementById("trainers").style.display = "flex";
  document.getElementById("attendance").style.display = "none";
  document.getElementById("routine").style.display = "none";
  document.getElementById("bmi").style.display = "none";
}

function func3(){
  document.getElementById("myprofile").style.display = "none";
  document.getElementById("members").style.display = "none";
  document.getElementById("trainers").style.display = "none";
  document.getElementById("attendance").style.display = "flex";
  document.getElementById("routine").style.display = "none";
  document.getElementById("bmi").style.display = "none";
}

function func4(){
  document.getElementById("myprofile").style.display = "none";
  document.getElementById("members").style.display = "none";
  document.getElementById("trainers").style.display = "none";
  document.getElementById("attendance").style.display = "none";
  document.getElementById("routine").style.display = "flex";
  document.getElementById("bmi").style.display = "none";
}

function func5(){
  document.getElementById("myprofile").style.display = "none";
  document.getElementById("members").style.display = "none";
  document.getElementById("trainers").style.display = "none";
  document.getElementById("attendance").style.display = "none";
  document.getElementById("routine").style.display = "none";
  document.getElementById("bmi").style.display = "flex";
}

function func6(){
  document.getElementsByClassName("sidebar").style.display="none";

}


// BMI JAVASCRIPT



function measureBMI () {
  // true = metric, false = imperial
  let unit = document.getElementById("bmi-metric").checked,
      weight = document.getElementById("bmi-weight"),
      weightu = document.getElementById("bmi-weight-unit"),
      height = document.getElementById("bmi-height"),
      heightu = document.getElementById("bmi-height-unit");
  
  if (unit) {
    weightu.innerHTML = "KG";
    weight.min = 1;
    weight.max = 635;
    heightu.innerHTML = "CM";
    height.min = 54;
    height.max = 272;
  } else {
    weightu.innerHTML = "LBS";
    weight.min = 2;
    weight.max = 1400;
    heightu.innerHTML = "IN";
    height.min = 21;
    height.max = 107;
  }
}

function calcBMI () {
  // (A) Get elements
  let bmi = null,
      unit = document.getElementById("bmi-metric").checked, // true = metric, false = imperial
      weight = parseInt(document.getElementById("bmi-weight").value),
      height = parseInt(document.getElementById("bmi-height").value),
      results = document.getElementById("bmi-results");

  // (B) Calculate BMI
  // Metric BMI = Mass (kg) / Height (m) square 
  if (unit) {
    height = height / 100;
    bmi = weight / (height * height);
  }
  // Imperial BMI = 703 X Mass (lbs) / Height (in) square 
  else {
    bmi = 703 * (weight / (height * height));
  }
  // Round off
  bmi = Math.round(bmi * 100) / 100; // Round off 2 decimal places

  // (C) Show Results
  if (bmi < 18.5) {
    results.innerHTML = bmi + " - Underweight";
  } else if (bmi < 25) {
    results.innerHTML = bmi + " - Normal weight";
  } else if (bmi < 30) {
    results.innerHTML = bmi + " - Pre-obesity";
  } else if (bmi < 35) {
    results.innerHTML = bmi + " - Obesity class I";
  } else if (bmi < 40) {
    results.innerHTML = bmi + " - Obesity class II";
  } else {
    results.innerHTML = bmi + " - Obesity class III";
  }
  return false;
}
