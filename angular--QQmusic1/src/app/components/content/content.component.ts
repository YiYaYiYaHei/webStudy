import { Component, OnInit } from '@angular/core';
import {ActivatedRoute,Params} from "@angular/router";

@Component({
  selector: 'app-content',
  templateUrl: './content.component.html',
  styleUrls: ['./content.component.css']
})
export class ContentComponent implements OnInit {
  public nArr:any;
  public n:any;
  constructor(private router:ActivatedRoute) { 
   console.log(this.router.params);
   this.nArr=[1,2,3,4,5,6,7,8,9,10,11,12,13];
  
  }
 
  ngOnInit() {
    var self=this;//回调函数中的this是指回调函数，所以要先存储this指向
    // subscribe为了获取params中的value值
    this.router.params.subscribe(function(data){
      console.log(data.id);
      switch(data.id){
        case '1':self.n=self.nArr[0];break;  
        case '2':self.n=self.nArr[1];break;     
        case '3':self.n=self.nArr[2];break; 
        case '4':self.n=self.nArr[3];break; 
        case '5':self.n=self.nArr[4];break; 
        case '6':self.n=self.nArr[5];break; 
        case '7':self.n=self.nArr[6];break; 
        case '8':self.n=self.nArr[7];break; 
        case '9':self.n=self.nArr[8];break; 
        case '10':self.n=self.nArr[9];break; 
        case '11':self.n=self.nArr[10];break; 
        case '12':self.n=self.nArr[11];break; 
        case '13':self.n=self.nArr[12];break; 
       }
    })
  }

}
