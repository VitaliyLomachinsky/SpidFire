const char = document.getElementsByClassName("characters__menu_none_active");
const weap = document.getElementsByClassName("weapon__menu_none_active");
const maps = document.getElementsByClassName("maps__menu_none_active");

const characters_btn = document.getElementsByClassName("Legends__btn");
const weapon_btn = document.getElementsByClassName("Weapons__btn");
const maps_btn = document.getElementsByClassName("Maps__btn");

const characters_btn_line = document.getElementsByClassName("Legends__btn__line");
const weapon_btn_line = document.getElementsByClassName("Weapons__btn__line");
const maps_btn_line = document.getElementsByClassName("Maps__btn__line");

const characters_btn_title = document.getElementsByClassName("Legends__btn_title");
const weapon_btn_title = document.getElementsByClassName("Weapons__btn_title");
const maps_btn_title = document.getElementsByClassName("Maps__btn_title");


function Legends_Function(){
  if(weap[0].classList.contains("weapon__menu_active")){
    weapon_btn_title[0].classList.toggle("main__btn__title_active");
    weap[0].classList.toggle("weapon__menu_active");
    weapon_btn[0].classList.toggle("main__btn_active");
    weapon_btn_line[0].classList.toggle("main__btn_line_active");
  }
  if(maps[0].classList.contains("maps__menu_active")){
    maps_btn_title[0].classList.toggle("main__btn__title_active");
    maps[0].classList.toggle("maps__menu_active");
    maps_btn[0].classList.toggle("main__btn_active");
    maps_btn_line[0].classList.toggle("main__btn_line_active");
  }
  characters_btn_title[0].classList.toggle("main__btn__title_active");
  characters_btn[0].classList.toggle("main__btn_active");
  characters_btn_line[0].classList.toggle("main__btn_line_active");
  char[0].classList.toggle("characters__menu_active");
}

function Weapons_Function(){
  if(maps[0].classList.contains("maps__menu_active")){
    maps_btn_title[0].classList.toggle("main__btn__title_active");
    maps[0].classList.toggle("maps__menu_active");
    maps_btn[0].classList.toggle("main__btn_active");
    maps_btn_line[0].classList.toggle("main__btn_line_active");
  }
  if(char[0].classList.contains("characters__menu_active")){
    characters_btn_title[0].classList.toggle("main__btn__title_active");
    char[0].classList.toggle("characters__menu_active");
    characters_btn[0].classList.toggle("main__btn_active");
    characters_btn_line[0].classList.toggle("main__btn_line_active");
  }
  weapon_btn_title[0].classList.toggle("main__btn__title_active");
  weapon_btn[0].classList.toggle("main__btn_active");
  weapon_btn_line[0].classList.toggle("main__btn_line_active");
  weap[0].classList.toggle("weapon__menu_active");
}

function Maps_Function(){
  if(weap[0].classList.contains("weapon__menu_active")){
    weapon_btn_title[0].classList.toggle("main__btn__title_active");
    weap[0].classList.toggle("weapon__menu_active");
    weapon_btn[0].classList.toggle("main__btn_active");
    weapon_btn_line[0].classList.toggle("main__btn_line_active");
  }
  if(char[0].classList.contains("characters__menu_active")){
    characters_btn_title[0].classList.toggle("main__btn__title_active");
    char[0].classList.toggle("characters__menu_active");
    characters_btn[0].classList.toggle("main__btn_active");
    characters_btn_line[0].classList.toggle("main__btn_line_active");
  }
  maps_btn_title[0].classList.toggle("main__btn__title_active");
  maps_btn[0].classList.toggle("main__btn_active");
  maps_btn_line[0].classList.toggle("main__btn_line_active");
  maps[0].classList.toggle("maps__menu_active");
}

