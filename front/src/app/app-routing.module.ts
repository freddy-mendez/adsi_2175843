import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { InicioComponent } from './components/inicio/inicio.component';
import { CrearComponent } from './components/libros/crear/crear.component';
import { ListarComponent } from './components/libros/listar/listar.component';

const routes: Routes = [
  {path: '', component: InicioComponent},
  {path: 'listar-libros', component: ListarComponent},
  {path: 'crear-libro', component: CrearComponent},
  {path: '**', redirectTo: '', pathMatch:"full"},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
