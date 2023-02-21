<?php
// Catalan extension, https://github.com/annaesvensson/yellow-language/tree/main/translations/catalan

class YellowCatalan {
    const VERSION = "0.8.42";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->language->setDefaults(array(
            "Language: ca",
            "LanguageLocale: ca_ES",
            "LanguageDescription: Català",
            "LanguageTranslator: Andreu Ferrer",
            "AudioDescription: Reproductor d'àudio HTML5.",
            "BerlinDescription: Berlin és un tema inspirat en Dieter Rams.",
            "BlogDescription: Blog per al vostre lloc web.",
            "BlogBy: per",
            "BlogTag: Etiquetes:",
            "BlogMore: Llegir més…",
            "BreadcrumbDescription: Navegació per breadcrumb.",
            "BreadcrumbNavigation: Breadcrumb",
            "BundleDescription: Agrupa arxius del lloc web.",
            "CatalanDescription: Llengua catalana.",
            "ChineseDescription: Llengua xinesa.",
            "CodefileDescription: Baixeu els blocs de codi com a fitxer de text.",
            "CommandDescription: Línia d'ordres del lloc web.",
            "ContactDescription: Pàgina de contacte per correu electrònic.",
            "ContactName: Nom:",
            "ContactEmail: Email:",
            "ContactMessage: Missatge:",
            "ContactConsent: Dono el meu consentiment perquè aquest lloc web emmagatzemi el meu missatge.",
            "ContactButton: Enviar el meu missatge",
            "ContactMailSpam: [Spam]",
            "ContactMailHeader: Heu rebut un missatge de: @sender:",
            "ContactMailFooter: Aquest correu electrònic és via @sitename - @title",
            "ContactStatusNone: Digues hola. Els teus comentaris són ben rebuts.",
            "ContactStatusIncomplete: Si us plau ompliu tots els camps.",
            "ContactStatusInvalid: Si us plau introduïu una adreça de correu electrònic vàlida.",
            "ContactStatusReview: Si us plau, removeu enllaços del missatge.",
            "ContactStatusDone: Vas enviar un email. Gràcies!",
            "ContactStatusError: L'email no ha pogut ser enviat, si us plau intenti-ho més tard.",
            "CopenhagenDescription: Copenhaguen és un tema bonic.",
            "CoreDescription: Funcionalitat principal del lloc web.",
            "CoreNavigation: Principal",
            "CorePagination: Pàgina",
            "CorePaginationPrevious: ← Anterior",
            "CorePaginationNext: Següent →",
            "CoreTimeFormatShort: H:i",
            "CoreTimeFormatMedium: H:i:s",
            "CoreTimeFormatLong: H:i:s T",
            "CoreDateFormatShort: F I",
            "CoreDateFormatMedium: d-m-Y",
            "CoreDateFormatLong: d-m-I H:i",
            "CoreDatePast: avui, ahir, fa @x dies, fa 1 mes, fa @x mesos, fa 1 any, fa @x anys, a @x",
            "CoreDateFuture: aviat, demà, en @x dies, en 1 mes, en @x mesos, en 1 any, en @x anys, en @x",
            "CoreDateMonthsNominative: Gener, Febrer, Març, Abril, Maig, Juny, Juliol, Agost, Setembre, Octubre, Novembre, Desembre",
            "CoreDateMonthsGenitive: Gener, Febrer, Març, Abril, Maig, Juny, Juliol, Agost, Setembre, Octubre, Novembre, Desembre",
            "CoreDateWeekdays: Dilluns, Dimarts, Dimecres, Dijous, Divendres, Dissabte, Diumenge",
            "CoreDateWeekstart: Dilluns",
            "CoreDecimalSeparator: ,",
            "CoreError404Title: Arxiu no trobat",
            "CoreError404Text: L'arxiu sol·licitat no s'ha trobat. Oh no...",
            "CoreError420Title: Pàgina no pública",
            "CoreError420Text: La pàgina sol·licitada no és pública. [yellow error]",
            "CoreError430Title: L'inici de sessió ha fallat",
            "CoreError430Text: El correu electrònic o la contrasenya són incorrectes. [Si us plau, torna-ho a provar](#data-action-login).",
            "CoreError434Title: Pàgina no trobada",
            "CoreError434Text: La pàgina sol·licitada no s'ha trobat. [Podeu crear aquesta pàgina](#data-action-edit).",
            "CoreError435Title: Pàgina no trobada",
            "CoreError435Text: La pàgina sol·licitada s'ha suprimit. [Podeu restaurar aquesta pàgina](#data-action-restore).",
            "CoreError450Title: Error d'actualització",
            "CoreError450Text: No es pot connectar al servidor d'actualització. Cal una connexió a Internet.",
            "CoreError500Title: Error del servidor",
            "CoreError500Text: S'ha produït un error. [yellow error]",
            "CsvDescription: Analitzador de fitxers CSV.",
            "CzechDescription: Llengua txeca.",
            "DailyDescription: Mostra les pàgines diàries.",
            "DanishDescription: Llengua danesa.",
            "DisqusDescription: Mostra els comentaris de Disqus al bloc.",
            "DraftDescription: Suport per a pàgines d'esborrany.",
            "DraftPageError: Inicieu sessió.",
            "DutchDescription: Idioma holandès.",
            "EditDescription: Editeu el seu lloc web en un navegador web.",
            "EditLoginTitle: Benvinguda",
            "EditLoginEmail: Email:",
            "EditLoginPassword: Contrasenya:",
            "EditLoginForgot: Has oblidat la teva contrasenya?",
            "EditLoginSignup: Crear un compte d'usuari?",
            "EditLoginButton: Accedir",
            "EditSignupTitle: Crear un compte d'usuari",
            "EditSignupName: Nom:",
            "EditSignupEmail: Correu electrònic:",
            "EditSignupPassword: Contrasenya:",
            "EditSignupConsent: Doneu el meu consentiment per a aquest lloc web emmagatzemi les meves dades personals.",
            "EditSignupButton: Crear",
            "EditSignupStatusNone: Aquí podràs crear una nova compte d'usuari.",
            "EditSignupStatusIncomplete: Per favor emplena tots els camps.",
            "EditSignupStatusInvalid: Per favor introduïu una adreça de correu electrònic vàlida.",
            "EditSignupStatusWeak: Per favor introduïu una contrasenya diferent.",
            "EditSignupStatusShort: Per favor introdueixi una contrasenya més llarga.",
            "EditSignupStatusNext: El compte d'usuari serà creat, per favor revisa el teu correu electrònic.",
            "EditForgotTitle: Has oblidat la contrasenya",
            "EditForgotEmail: Correu electrònic:",
            "EditForgotStatusNone: No hi ha problema, podeu crear una nova contrasenya.",
            "EditForgotStatusInvalid: Per favor introduïu una adreça de correu electrònic vàlida.",
            "EditForgotStatusNext: El compte d'usuari serà recuperat, per favor revisa el teu correu electrònic.",
            "EditRecoverTitle: Has oblidat la teva contrasenya",
            "EditRecoverPassword: Contrasenya:",
            "EditRecoverStatusPassword: Per favor introduïu una nova contrasenya.",
            "EditRecoverStatusWeak: Per favor introduïu una contrasenya diferent.",
            "EditRecoverStatusShort: Per favor introdueixi una contrasenya més llarga.",
            "EditRecoverStatusDone: Compte d'usuari recuperada. ¡Gràcies!",
            "EditConfirmSubject: Confirmar compte d'usuari",
            "EditConfirmMessage: Hola @usershort,\\n\\nper favor confirmeu el vostre compte. Feu clic al següent enllaç.",
            "EditConfirmTitle: Compte d'usuari",
            "EditConfirmStatusDone: Compte d'usuari confirmat i espera l'aprovació. ¡Gràcies!",
            "EditApproveSubject: Aprovar compte d'usuari",
            "EditApproveMessage: Hola @usershort,\\n\\nper favor aprova el nou compte per a @useraccount. Feu clic al següent enllaç.",
            "EditApproveTitle: Compte d'usuari",
            "EditApproveStatusDone: Compte d'usuari aprovada. ¡Gracias!",
            "EditReactivateSubject: Reactiva el compte d'usuari",
            "EditReactivateMessage: Hola @usershort,\\n\\nsi us plau, reactiveu el vostre compte d'usuari. Hi ha hagut massa intents fallits d'inici de sessió. Feu clic a l'enllaç següent.",
            "EditReactivateTitle: Compte d'usuari",
            "EditReactivateStatusDone: Compte d'usuari reactivat. Gràcies!",
            "EditVerifySubject: Canvia el compte d'usuari",
            "EditVerifyMessage: Hola @usershort,\\n\\nsi us plau, confirmeu un correu electrònic nou per al vostre compte d'usuari. Feu clic a l'enllaç següent.",
            "EditVerifyTitle: Compte d'usuari",
            "EditVerifyStatusDone: El compte d'usuari ha canviat. Gràcies!",
            "EditChangeSubject: Canvia el compte d'usuari",
            "EditChangeMessage: Hola @usershort,\\n\\nsi us plau, confirmeu que voleu canviar el vostre compte d'usuari. Feu clic a l'enllaç següent.",
            "EditChangeTitle: Compte d'usuari",
            "EditChangeStatusDone: El compte d'usuari ha canviat. Gràcies!",
            "EditRemoveSubject: Suprimir el compte d'usuari",
            "EditRemoveMessage: Hola @usershort,\\n\\nsi us plau, confirmeu que voleu suprimir el vostre compte d'usuari. Feu clic al següent enllaç.",
            "EditRemoveTitle: Compte d'usuari",
            "EditRemoveStatusDone: S'ha suprimit el compte d'usuari. Gràcies!",
            "EditRecoverSubject: Recuperar el compte d'usuari",
            "EditRecoverMessage: Hola @usershort,\\n\\nper favor confirmeu que heu oblidat la contrasenya. Haz clic al següent enllaç.",
            "EditWelcomeSubject: Benvinguda",
            "EditWelcomeMessage: Hola @usershort,\\n\\nel compte d'usuari s'ha creat. Diviértit editant el lloc web.",
            "EditGoodbyeSubject: Adéu",
            "EditGoodbyeMessage: Hola @usershort,\\n\\el vostre compte d'usuari s'ha suprimit. Tingueu cura.",
            "EditAccountTitle: Usuari",
            "EditAccountInformation: Podeu suprimir el vostre compte d'usuari en qualsevol moment.",
            "EditAccountMore: Llegeix més...",
            "EditAccountStatusNone: Aquí podeu canviar el vostre compte d'usuari.",
            "EditAccountStatusInvalid: Introduïu un correu electrònic vàlid.",
            "EditAccountStatusTaken: Introduïu un altre correu electrònic.",
            "EditAccountStatusWeak: Introduïu una contrasenya diferent.",
            "EditAccountStatusShort: Introduïu una contrasenya més llarga.",
            "EditAccountStatusNext: El compte d'usuari es canviarà; consulteu els vostres correus electrònics.",
            "EditQuitTitle: Suprimir el compte d'usuari",
            "EditQuitStatusNone: Introduïu el vostre nom per confirmar.",
            "EditQuitStatusMismatch: Introduïu un nom diferent.",
            "EditQuitStatusNext: El compte d'usuari s'eliminarà, si us plau, comproveu els vostres correus electrònics.",
            "EditConfigureTitle: Lloc web",
            "EditConfigureSitename: Nom del lloc web:",
            "EditConfigureAuthor: Nom de l'administrador web:",
            "EditConfigureEmail: Correu electrònic de l'administrador web:",
            "EditConfigureInformation: L'administrador web pot aprovar nous comptes d'usuari.",
            "EditConfigureStatusNone: Aquí podeu configurar el vostre lloc web.",
            "EditConfigureStatusInvalid: Introduïu un correu electrònic vàlid.",
            "EditUpdateTitle: Actualitzacions",
            "EditUpdateStatusNone: Datenstrom Yellow és per a persones que fan llocs web petits".
            "EditUpdateStatusCheck: Comprovant actualitzacions...",
            "EditUpdateStatusUpdates: Les actualitzacions següents estan disponibles:",
            "EditUpdateStatusOk: El vostre lloc web està actualitzat.",
            "EditOkButton: D'acord",
            "EditCancelButton: Cancel·lar",
            "EditChangeButton: Canvia",
            "EditCreateButton: Crear",
            "EditEditButton: Desar",
            "EditDeleteButton: Borrar",
            "EditUpdateButton: Actualització",
            "EditEdit: Editar pàgina", 
            "EditQuitStatusMismatch: Introduïu un nom diferent.",
            "EditQuitStatusNext: El compte d'usuari s'eliminarà, si us plau, comproveu els vostres correus electrònics.",
            "EditConfigureTitle: Lloc web",
            "EditConfigureSitename: Nom del lloc web:",
            "EditConfigureAuthor: Nom de l'administrador web:",
            "EditConfigureEmail: Correu electrònic de l'administrador web:",
            "EditConfigureInformation: L'administrador web pot aprovar nous comptes d'usuari.",
            "EditConfigureStatusNone: Aquí podeu configurar el vostre lloc web.",
            "EditConfigureStatusInvalid: Introduïu un correu electrònic vàlid.",
            "EditUpdateTitle: Actualitzacions",
            "EditUpdateStatusNone: Datenstrom Yellow és per a persones que fan llocs web petits".
            "EditUpdateStatusCheck: Comprovant actualitzacions...",
            "EditUpdateStatusUpdates: Les actualitzacions següents estan disponibles:",
            "EditUpdateStatusOk: El vostre lloc web està actualitzat.",
            "EditOkButton: D'acord",
            "EditCancelButton: Cancel·lar",
            "EditChangeButton: Canvia",
            "EditCreateButton: Crear",
            "EditEditButton: Desar",
            "EditDeleteButton: Borrar",
            "EditUpdateButton: Actualització",
            "EditEdit: Editar pàgina",
            "EditCreate: +",
            "EditDelete: -",
            "EditKeyboardLabels: Ctrl+, Alt+, Maj+, ⌘, ⌥, ⇧",
            "EditToolbarFormat: Format",
            "EditToolbarHeading: Heading",
            "EditToolbarH1: Heading 1",
            "EditToolbarH2: Heading 2",
            "EditToolbarH3: Heading 3",
            "EditToolbarParagraph: text normal",
            "EditToolbarPre: Codi font",
            "EditToolbarNotice: Avís",
            "EditToolbarQuote: Cita",
            "EditToolbarBold: Negreta",
            "EditToolbarItalic: Cursiva",
            "EditToolbarStrikethrough: Taxat",
            "EditToolbarCode: Codi",
            "EditToolbarList: Llista",
            "EditToolbarUl: • Llista no ordenada",
            "EditToolbarOl: 1. Llista ordenada",
            "EditToolbarTl: ✓ Llista de tasques",
            "EditToolbarLink: Enllaç",
            "EditToolbarFile: Fitxer",
            "EditToolbarEmoji: Emoji",
            "EditToolbarIcon: icona",
            "EditToolbarStatus: Estat",
            "EditToolbarUndo: Desfer",
            "EditToolbarRefe: Refeix",
            "EditToolbarPreview: Vista prèvia",
            "EditToolbarHelp: Ayuda",
            "EditMailFooter: @sitename",
            "EditDataGenerated: Aquesta pàgina es genera automàticament.",
            "EditUploadProgress: Pujar arxiu...",
            "EditUserDescription: Editor",
            "EditMenuSettings: Configuracions",
            "EditMenuHelp: Ajuda",
            "EditMenuLogout: Sortir",
            "EditYellowUrl: https://datenstrom.se/yellow/",
            "EditYellowHelpUrl: https://datenstrom.se/yellow/help/",
            "EmojiDescription: Un munt i un munt d'emojis.",
            "EnglishDescription: Llengua anglesa.",
            "FeedDescription: Canal amb canvis recents.",
            "FrenchDescription: Llengua francesa.",
            "GalleryDescription: Galeria d'imatges amb finestra emergent.",
            "GermanDescription: Llengua alemanya.",
            "GooglecalendarDescription: Incrusta el calendari de Google.",
            "GooglemapDescription: Incrusta el mapa de Google.",
            "HelloworldDescription: Crea text animat.",
            "HelpDescription: Ajuda per al vostre lloc web.",
            "HighlightDescription: Ressaltar el codi font.",
            "HungarianDescription: Llengua hongaresa.",
            "IconDescription: Icones i símbols.",
            "ImageDescription: Imatges i miniatures.",
            "ImageDefaultAlt: Imatge sense descripció",
            "InstagramDescription: Incrusta fotos d'Instagram.",
            "InstallTitle: Hola",
            "InstallLanguage: Quin és el seu idioma?",
            "InstallExtension: Què vols fer?",
            "InstallExtensionWebsite: Petit lloc web",
            "InstallExtensionBlog: Petit bloc",
            "InstallExtensionWiki: Petit wiki",
            "InstallButton: Instal·lar",
            "InstallHomeTitle: Inici",
            "InstallHomeText: [image photo.jpg Exemple rounded]\\n\\n[edit - Podeu editar aquesta pàgina en un navegador web] o utilitzar un editor de text. [Consulteu ajuda](https://datenstrom.se/yellow/help/).",
            "InstallAboutTitle: Sobre",
            "InstallAboutText: [Fet amb Datenstrom Yellow](https://datenstrom.se/yellow/).",
            "InstallDefaultTitle: Pàgina",
            "InstallDefaultText: Aquesta és una pàgina nova.",
            "InstallBlogTitle: Pàgina del blog",
            "InstallBlogText: Aquesta és una pàgina del blog nova.",
            "InstallWikiTitle: Pàgina Wiki",
            "InstallWikiText: Aquesta és una pàgina wiki nova.",
            "InstallExampleImage: Aquesta és una imatge d'exemple",
            "ItalianDescription: Llengua italiana.",
            "JapaneseDescription: Llengua japonesa.",
            "MarkdownDescription: Format de text per a humans.",
            "MetaDescription: Metadades per a humans i màquines.",
            "NorwegianDescription: Llengua noruega.",
            "ParisDescription: París és un tema elegant.",
            "ParsedownDescription: Format de text per a humans.",
            "PodcastDescription: Canal web optimitzat per a la publicació de podcasts.",
            "PolishDescription: Llengua polonesa.",
            "PortugueseDescription: Llengua portuguesa.",
            "PreviousnextDescription: Mostra els enllaços a la pàgina anterior/següent.",
            "PreviousnextNavigation: Pàgina",
            "PreviousnextPagePrevious: ← Anterior: @títol",
            "PreviousnextPageNext: Següent: @title →",
            "PrivateDescription: suport per a pàgines protegides amb contrasenya.",
            "PrivatePageError: Introduïu la contrasenya.",
            "ProfileDescription: Perfil de l'autor per a pàgines de bloc.",
            "PublishDescription: Crear i publicar extensions.",
            "RadiobossDescription: Ginys per a RadioBoss Cloud.",
            "RandomDescription: Mostra pàgines aleatòries.",
            "ReadingtimeDescription: Mostra el temps de lectura estimat per al contingut de la pàgina.",
            "RedirectDescription: Redirecció alternativa de la pàgina.",
            "RussianDescription: Llengua russa.",
            "SearchDescription: Cerca de text complet.",
            "SearchResultsNone: Introdueix un terme de cerca.",
            "SearchResultsEmpty: No hi ha resultats.",
            "SearchSpecialChanges: Canvis recents",
            "SearchButton: Cercar",
            "ServeDescription: Servidor web integrat.",
            "SitemapDescription: Sitemap amb totes les pàgines.",
            "SliderDescription: Galeria d'imatges amb control lliscant.",
            "SlovakDescription: Llengua eslovaca.",
            "SoundcloudDescription: Incrusta pistes d'àudio de Soundcloud.",
            "SpanishDescription: Llengua espanyola.",
            "SpoilerDescription: Amaga determinats elements de la pàgina.",
            "StockholmDescription: Stockholm és un tema pur.",
            "SwedishDescription: Llengua sueca.",
            "TickerDescription: Analitzador de canals RSS.",
            "TocDescription: Taula de continguts.",
            "TrafficDescription: Creeu anàlisis de trànsit a partir de fitxers de registre.",
            "TurkishDescription: Idioma turc.",
            "TwitterDescription: Incrusta missatges de Twitter.",
            "UpdateDescription: Manteniu el lloc web actualitzat.",
            "UpdateExtensionDefaultDescription: No hi ha descripció disponible.",
            "UpdateExtensionDeveloper: Desenvolupat per @x.",
            "UpdateExtensionDesigner: Dissenyat per @x.",
            "UpdateExtensionTranslator: Traduït per @x.",
            "WikiDescription: Wiki per al vostre lloc web.",
            "WikiModified: Última actualització el",
            "WikiTag: Etiquetes:",
            "WikiSpecialPages: Totes les pàgines",
            "WikiSpecialChanges: Canvis recents",
            "WittstockDescription: Wittstock és un tema sense classe.",
            "YoutubeDescription: Incrusta vídeos de Youtube."));
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("language" => "ca"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="ca") {
            $this->yellow->system->save($fileName, array("language" => $this->yellow->system->getDifferent("language")));
        }
    }
}