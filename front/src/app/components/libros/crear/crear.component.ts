import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { LibroService } from 'src/app/services/libro.service';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { Libro } from 'src/app/models/Libro';

@Component({
  selector: 'app-crear',
  templateUrl: './crear.component.html',
  styleUrls: ['./crear.component.css']
})
export class CrearComponent implements OnInit {
  libroForm: FormGroup;

  constructor(private router: Router,
    private libroService: LibroService,
    private fb: FormBuilder) {
      this.libroForm = this.fb.group({
        codigo: ['', Validators.required],
        nombre: ['', Validators.required],
        tematica: ['', Validators.required],
        autor: ['', Validators.required],
        anhoPublicacion: ['', Validators.required],
      });
     }

  ngOnInit(): void {
  }

  addLibro(): void {
    const libro : Libro = {
      codigo: this.libroForm.get('codigo')?.value,
      nombre: this.libroForm.get('nombre')?.value,
      tematica: this.libroForm.get('tematica')?.value,
      autor: this.libroForm.get('autor')?.value,
      anhoPublicacion: this.libroForm.get('anhoPublicacion')?.value
    };
    console.log(libro);
    this.libroService.addLibro(libro).subscribe(data => {
      this.router.navigate(['/listar-libros']);
    });
  }

}
