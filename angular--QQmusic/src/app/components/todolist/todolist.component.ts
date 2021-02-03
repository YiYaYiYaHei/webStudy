import { Component, OnInit } from '@angular/core';
import { StorageService } from '../../services/storage.service';//引入服务

@Component({
  selector: 'app-todolist',
  templateUrl: './todolist.component.html',
  styleUrls: ['./todolist.component.css']
})
export class TodolistComponent implements OnInit {
  list=[];
  content='';
  n=0;//正在进行的数量
  bn=0;//已经完成的数量
  states=true;//判断是否影藏

  constructor(private service:StorageService) {
    // console.log(service);
    // this.service.setItem("name","sdsd");
    // console.log(this.service.getItem("name"));
   }

  //  页面刷新的时候（载入的时候初始化）
   ngOnInit() {
    if(this.service.getItem('todolist')){
      this.list=this.service.getItem('todolist');
      this.n=this.service.getItem("count");
      this.bn=this.service.getItem("countbn");

    }
  }

  // 回车添加代办事项
  keyup(ev){
    // 判断todolist在本地存储中是否存在，若存在--则直接加入头部，若不存在--则将数据以数组形式传给服务，进行存储
    var todolist=this.service.getItem('todolist');
    var obj ={
      name:this.content,
      state:this.states,
    }
    if(ev.keyCode==13){
      // 本地存储
      if(todolist){
        // console.log(todolist,todolist instanceof Array);
        todolist.unshift(obj);
        this.service.setItem('todolist',todolist);
        this.n++;
      }else{
        var arr1=[];//传数组参数，后面转成json格式才是数组
        arr1.push(obj);
        this.service.setItem('todolist',arr1);
        this.n++;
      }
      //显示在页面
      this.list.unshift(obj);
      // console.log(todolist);
      // this.list=todolist;//第一次的时候todolist还不存在，所以第一次不会显现
      this.service.setItem("count",this.n);
      this.content='';//文本框内容清空
    }
  }

  // 点击删除  如果state==true则让正在进行的数量-1；否则让已经完成的数量-1
  del(i){
    if(this.list[i].state==true){
        this.list.splice(i,1);
        this.service.setItem("todolist",this.list);
       this.n--;
    }else if(this.list[i].state==false){
      this.list.splice(i,1);
      this.service.setItem("todolist",this.list);
      this.bn--;
    }
    this.service.setItem("count",this.n);
    this.service.setItem("countbn",this.bn);
  }

  // 判断状态--点击变成已完成事项   正在进行的数量-1，已完成数量+1
  judgeState(i){
    console.log(this.list);
    if(this.list[i].state==true){
      this.list[i].state=false;
      this.service.setItem("todolist",this.list);
      this.bn++;
      this.n--;
    }
    this.service.setItem("count",this.n);
    this.service.setItem("countbn",this.bn);
  }


}
