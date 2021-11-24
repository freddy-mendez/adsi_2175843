export class Libro {
    id?: number;
    codigo: string;
    nombre: string;
    tematica: string;
    autor: string;
    anhoPublicacion: number;

    constructor(codigo: string, nombre:string, tematica:string, autor:string, anhoPublicacion:number) {
        this.codigo=codigo;
        this.nombre=nombre;
        this.tematica=tematica;
        this.autor=autor;
        this.anhoPublicacion=anhoPublicacion;
    }
}