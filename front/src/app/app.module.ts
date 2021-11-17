import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ListarComponent } from './components/libros/listar/listar.component';
import { InicioComponent } from './components/inicio/inicio.component';
import { CrearComponent } from './components/libros/crear/crear.component';

@NgModule({
  declarations: [
    AppComponent,
    ListarComponent,
    InicioComponent,
    CrearComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
