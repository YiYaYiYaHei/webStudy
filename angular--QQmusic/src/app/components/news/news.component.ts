import { Component, OnInit } from '@angular/core';
// import "../../../../node_modules/jquery-weui";

@Component({
  selector: 'app-news',
  templateUrl: './news.component.html',
  styleUrls: ['./news.component.css']
})
export class NewsComponent implements OnInit {
  flag=false;

  constructor() { }

  click(){
    this.flag=true;
    console.log(this.flag);
  }

  clickA(ev){
    this.flag=false;
    // ev.stopPropagation? ev.stopPropagation():ev.cancleBubble=true;
    console.log("1:"+this.flag);
  }


  ngOnInit() {
  }

}
