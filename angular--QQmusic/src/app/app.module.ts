import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import {FormsModule}from '@angular/forms';


import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeComponent } from './components/home/home.component';
import { NewsComponent } from './components/news/news.component';
import { UserComponent } from './components/user/user.component';
import { TodolistComponent } from './components/todolist/todolist.component';
import { ContentComponent } from './components/content/content.component';

@NgModule({
  declarations: [//用到的组件、指令、管道
    AppComponent,
    HomeComponent,
    NewsComponent,
    UserComponent,
    TodolistComponent,
    ContentComponent,
  ],
  imports: [//导入需要的模块
    BrowserModule,
    AppRoutingModule,
    FormsModule
  ],
  providers: [],//依赖注入的模块
  bootstrap: [AppComponent]//设置跟组件
})
export class AppModule { }
