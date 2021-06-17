const randomPicker = () => {
    weapon = Math.floor(Math.random() * 3);
    return weapon
  }; 

function Play(PickedWeapon) {
const randomweapon = randomPicker();
winorlose(PickedWeapon, randomweapon)
}

function winorlose(PickedWeapon, randomweapon){

    if(PickedWeapon == 0 && randomweapon == 1) {
        lost(randomweapon, PickedWeapon);
    }
    else if(PickedWeapon == 1 && randomweapon == 0){
        won(randomweapon, PickedWeapon);
    }
    else if(PickedWeapon == 1 && randomweapon == 2) {
        lost(randomweapon, PickedWeapon);
    }
    else if(PickedWeapon == 2 && randomweapon == 1){
        won(randomweapon, PickedWeapon);
    }
    else if(PickedWeapon == 0 && randomweapon == 2){
        won(randomweapon, PickedWeapon);
    }
    else if(PickedWeapon == 2 && randomweapon == 0){
        lost(randomweapon, PickedWeapon);
    }else{
        tie(randomweapon, PickedWeapon);
    }
}

function lost (randomweapon, PickedWeapon){
weaponslist = ["Rock", "Paper", "Scissor"];

document.getElementById("Ipick").innerHTML = "You Picked:  " + weaponslist[PickedWeapon];
document.getElementById("Epick").innerHTML = "Enemy  Picked: " + weaponslist[randomweapon];
document.getElementById("Winorlose").innerHTML = "You Lost";
}
function won (randomweapon, PickedWeapon){
weaponslist = ["Rock", "Paper", "Scissor"];
document.getElementById("Ipick").innerHTML = "You Picked:  " + weaponslist[PickedWeapon];
document.getElementById("Epick").innerHTML = "Enemy  Picked: " + weaponslist[randomweapon];
document.getElementById("Winorlose").innerHTML = "You Won";
}
function tie (randomweapon, PickedWeapon){
weaponslist = ["Rock", "Paper", "Scissor"];
document.getElementById("Ipick").innerHTML = "You Picked:  " + weaponslist[PickedWeapon];
document.getElementById("Epick").innerHTML = "Enemy  Picked: " + weaponslist[randomweapon];
document.getElementById("Winorlose").innerHTML = "You Tie";
}