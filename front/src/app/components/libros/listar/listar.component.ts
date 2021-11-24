import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { Libro } from 'src/app/models/Libro';
import { LibroService } from 'src/app/services/libro.service';

@Component({
  selector: 'app-listar',
  templateUrl: './listar.component.html',
  styleUrls: ['./listar.component.css']
})
export class ListarComponent implements OnInit {

  libros : Libro[] = [];

  constructor(private router: Router,
              private libroService: LibroService) { }

  ngOnInit(): void {
    this.getLibros();
  }

  getLibros() : void {
    this.libroService.getLibros().subscribe(data => {
      this.libros=data;
    });
  }

  deleteLibro(id: any): void {
    this.libroService.deleteLibro(id).subscribe(data => {
      if (data.result=='OK') {
        this.getLibros();
      }
    });
  }

}
