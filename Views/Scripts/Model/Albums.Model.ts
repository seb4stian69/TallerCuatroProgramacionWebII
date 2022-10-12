export default class Albums{

    // Attributes

    private albumID:number;
    private albumName:string;
    private dataReleased:Date;
    private artistID:number;
    private genreID:number;

    // Constructor

    constructor(albumID:number, albumName:string, dataReleased:Date, artistID:number, genreID:number) {
        this.albumID = albumID;
        this.albumName = albumName;
        this.dataReleased = dataReleased;
        this.artistID = artistID;
        this.genreID = genreID;
    }

    // Access Methods [Setters]

    set AlbumID(albumID:number){
        this.albumID = albumID;
    }
    set AlbumName(albumName:string){
        this.albumName = albumName;
    }
    set DataReleased(dataReleased:Date){
        this.dataReleased = dataReleased;
    }
    set ArtistID(artistID:number){
        this.artistID = artistID;
    }
    set GenreID(genreID:number){
        this.genreID = genreID;
    }

    // Access Methods [Getters]

    get AlbumID():number {
        return this.albumID;
    }
    get AlbumName():string {
        return this.albumName;
    }
    get DataReleased():Date {
        return this.dataReleased;
    }
    get ArtistID():number {
        return this.artistID;
    }
    get GenreID():number {
        return this.genreID;
    }

}