import { Injectable } from '@angular/core';

import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Libro } from '../models/Libro';

@Injectable({
  providedIn: 'root'
})
export class LibroService {

  url = 'http://localhost:8000/api/libro/';

  constructor(private http: HttpClient) { }

  getLibros() : Observable<any> {
    return this.http.get(this.url);
  }

  addLibro(libro: Libro) : Observable<any> {
    return this.http.post(this.url, libro);
  }

  deleteLibro(id: string) : Observable<any> {
    return this.http.delete(this.url+id);
  }


}
