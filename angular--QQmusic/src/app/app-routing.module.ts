import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

// 引入路由模块
import { HomeComponent } from './components/home/home.component';
import { NewsComponent } from './components/news/news.component';
import { UserComponent } from './components/user/user.component';
import { TodolistComponent } from './components/todolist/todolist.component';
import { ContentComponent } from './components/content/content.component';

// 路由配置
const routes: Routes = [
  {path:"home",component:HomeComponent},
  {path:"news",component:NewsComponent},
  {path:"user",component:UserComponent},
  {path:"todolist",component:TodolistComponent}, {path:"user/:id",component:ContentComponent},
  {path:"",component:HomeComponent},
  {path:"**",component:HomeComponent},
 
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
