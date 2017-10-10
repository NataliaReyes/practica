import { BrowserModule } from '@angular/platform-browser';
import { ErrorHandler, NgModule } from '@angular/core';
import { IonicApp, IonicErrorHandler, IonicModule } from 'ionic-angular';
import { SplashScreen } from '@ionic-native/splash-screen';
import { StatusBar } from '@ionic-native/status-bar';


import { MyApp } from './app.component';
import { HomePage } from '../pages/home/home';
import { InsidiousPage} from '../pages/insidious/insidious';
import { ItPage} from '../pages/it/it';
import { PoltergeistPage} from '../pages/poltergeist/poltergeist';
import { TheothersPage} from '../pages/theothers/theothers';
import { ThecraziesPage} from '../pages/thecrazies/thecrazies';
import { LoginPage} from '../pages/login/login';
import { CreatePage} from '../pages/create/create';
import { AgregarPage} from '../pages/agregar/agregar';
import { ComentarioPage} from '../pages/comentario/comentario';
import { LeerPage } from '../pages/leer/leer';
import { CinesPage } from '../pages/cines/cines';
import {MapPage} from '../pages/map/map';
import {DirectionPage} from '../pages/direction/direction';




@NgModule({
  declarations: [
    MyApp,
    HomePage,
    InsidiousPage,
    ItPage,
    PoltergeistPage,
    TheothersPage,
    ThecraziesPage,
    LoginPage,
    CreatePage,
    AgregarPage,
    ComentarioPage,
    LeerPage,
    CinesPage,
    MapPage,
    DirectionPage
  ],
  imports: [
    BrowserModule,
    IonicModule.forRoot(MyApp),
   
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    HomePage,
    InsidiousPage,
    ItPage,
    PoltergeistPage,
    TheothersPage,
    ThecraziesPage,
    LoginPage,
    CreatePage,
    AgregarPage,
    ComentarioPage,
    LeerPage,
    CinesPage,
    MapPage,
    DirectionPage
  ],
  providers: [
    StatusBar,
    SplashScreen,
    {provide: ErrorHandler, useClass: IonicErrorHandler}
  ]
})
export class AppModule {
  
}
