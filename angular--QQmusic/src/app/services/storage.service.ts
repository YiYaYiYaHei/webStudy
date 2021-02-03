import { Injectable } from '@angular/core';
import { CHECKBOX_VALUE_ACCESSOR } from '@angular/forms/src/directives/checkbox_value_accessor';

@Injectable({
  providedIn: 'root'
})
export class StorageService {

  constructor() {
   
  }
  setItem(key,value){
    localStorage.setItem(key,JSON.stringify(value));
  }

  getItem(key){
    return JSON.parse(localStorage.getItem(key));
    // return localStorage.getItem(key);
  }
  // removeItem(key){
  //   // var arrS=this.getItem("todolist").split("},");
  //   console.log(this.getItem("todolist"));
  //   localStorage.removeItem(key);
  // }
}
