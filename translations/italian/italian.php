<?php
// Italian extension, https://github.com/annaesvensson/yellow-language/tree/main/translations/italian

class YellowItalian {
    const VERSION = "0.8.35";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->language->setDefault($this->getDefault());
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("language" => "it"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="it") {
            $this->yellow->system->save($fileName, array("language" => $this->yellow->system->getDifferent("language")));
        }
    }
    
    // Return default language settings
    public function getDefault() {
        return <<< 'END'
        Language: it
        LanguageLocale: it_IT
        LanguageDescription: Italiano
        LanguageTranslator: Giovanni Salmeri
        BerlinDescription: Berlin è un tema ispirato da Dieter Rams.
        BlogDescription: Blog per il tuo sito.
        BlogBy: di
        BlogTag: Tag:
        BlogMore: Leggi di più…
        BreadcrumbDescription: Percorso di navigazione.
        BundleDescription: Aggrega i file del sito.
        ChineseDescription: Cinese/简体中文 con lingua 'zh'.
        CommandDescription: Linea di comando del sito.
        ContactDescription: Pagina di contatto.
        ContactName: Nome:
        ContactEmail: Indirizzo email:
        ContactMessage: Messaggio:
        ContactConsent: Acconsento alla registrazione del mio messaggio in questo sito.
        ContactButton: Invia mio messaggio
        ContactMailSpam: [Spam]
        ContactMailHeader: Hai ricevuto un messaggio da @sender:
        ContactMailFooter: Questo messaggio è stata inviato tramite @sitename - @title
        ContactStatusNone: I tuoi commenti sono benvenuti!
        ContactStatusIncomplete: Compila per favore tutti i campi.
        ContactStatusInvalid: Inserisci per favore un indirizzo email valido.
        ContactStatusReview: Rimuovi per favore i collegamenti dal messaggio.
        ContactStatusDone: Il tuo messaggio è stato inviato con successo. Grazie!
        ContactStatusError: C'è stato un problema nell'invio del messaggio. Riprova per favore più tardi.
        CopenhagenDescription: Copenhagen è un tema bellissimo.
        CoreDescription: Funzionalità di base del sito.
        CorePaginationPrevious: ← Precedente
        CorePaginationNext: Successivo →
        CoreTimeFormatShort: H:i
        CoreTimeFormatMedium: H:i:s
        CoreTimeFormatLong: H:i:s T
        CoreDateFormatShort: F Y
        CoreDateFormatMedium: d/m/Y
        CoreDateFormatLong: d/m/Y H:i
        CoreDatePast: oggi, ieri, @x giorni fa, un mese fa, @x mesi fa, un anno fa, @x anni fa, il @x
        CoreDateFuture: presto, domani, tra @x giorni, tra un mese, tra @x mesi, tra un anno, tra @x anni, il @x
        CoreDateMonthsNominative: gennaio, febbraio, marzo, aprile, maggio, giugno, luglio, agosto, settembre, ottobre, novembre, dicembre
        CoreDateMonthsGenitive: gennaio, febbraio, marzo, aprile, maggio, giugno, luglio, agosto, settembre, ottobre, novembre, dicembre
        CoreDateWeekdays: lunedì, martedì, mercoledì, giovedì, venerdì, sabato, domenica
        CoreDateWeekstart: lunedì
        CoreDecimalSeparator: ,
        CoreError404Title: Pagina non trovata
        CoreError404Text: La pagina richiesta non è stata trovata. Oh no...
        CoreError420Title: Pagina non pubblica
        CoreError420Text: La pagina richiesta non è pubblica. [yellow error]
        CoreError430Title: Accesso non riuscito
        CoreError430Text: L'indirizzo email o la parola d'ordine non è corretto. [Per favore riprova](#data-action-login).
        CoreError434Title: Pagina non trovata
        CoreError434Text: La pagina richiesta non è stata trovata. [Puoi creare ora questa pagina](#data-action-edit).
        CoreError435Title: Pagina non trovata
        CoreError435Text: La pagina richiesta è stata eliminata. [Puoi ripristinare questa pagina](#data-action-restore).
        CoreError450Title: Update error
        CoreError450Text: Impossibile connettersi al server di aggiornamento. È necessaria una connessione a Internet.
        CoreError500Title: Errore del server
        CoreError500Text: Qualcosa non ha funzionato. [yellow error]
        CzechDescription: Ceco/Čeština con lingua 'cs'.
        DanishDescription: Danese/Dansk con lingua 'da'.
        DisqusDescription: Mostra commenti Disqus nel blog.
        DraftDescription: Supporto per pagine in bozza.
        DraftStatusEmpty: Non c'è nessuna bozza.
        DraftPageError: Per favore accedi.
        DutchDescription: Olandese/Nederlands con lingua 'nl'.
        EditDescription: Modifica il tuo sito in un browser.
        EditLoginTitle: Salve!
        EditLoginEmail: Indirizzo email:
        EditLoginPassword: Parola d'ordine:
        EditLoginForgot: Recupera la tua parola d'ordine
        EditLoginSignup: Crea un nuovo account utente
        EditLoginButton: Accedi
        EditSignupTitle: Crea un nuovo account utente
        EditSignupName: Nome:
        EditSignupEmail: Indirizzo email:
        EditSignupPassword: Parola d'ordine:
        EditSignupConsent: Acconsento alla registrazione dei miei dati personali in questo sito.
        EditSignupButton: Crea
        EditSignupStatusNone: Qui puoi impostare le credenziali di accesso.
        EditSignupStatusIncomplete: Compila per favore tutti i campi.
        EditSignupStatusInvalid: Inserisci per favore un indirizzo email valido.
        EditSignupStatusWeak: Inserisci per favore una parola d'ordine diversa.
        EditSignupStatusShort: Inserisci per favore una parola d'ordine più lunga.
        EditSignupStatusNext: Verrà creato un nuovo account utente, un messaggio di verifica verrà inviato al relativo indirizzo.
        EditForgotTitle: Recupera la parola d'ordine
        EditForgotEmail: Email:
        EditForgotStatusNone: Nessun problema, puoi creare una nuova parola d'ordine.
        EditForgotStatusInvalid: Inserisci per favore un indirizzo email valido.
        EditForgotStatusNext: Il tuo account utente è di nuovo disponibile, controlla per favore la tua posta elettronica.
        EditRecoverTitle: Recupera la parola d'ordine
        EditRecoverPassword: Parola d'ordine:
        EditRecoverStatusPassword: Inserisci per favore una nuova parola d'ordine.
        EditRecoverStatusWeak: Inserisci per favore una parola d'ordine diversa.
        EditRecoverStatusShort: Inserisci per favore una parola d'ordine più lunga.
        EditRecoverStatusDone: Account utente recuperato. Grazie!
        EditConfirmSubject: Conferma l'account utente
        EditConfirmMessage: Salve @usershort,\n\nper favore conferma il tuo account utente selezionando il seguente link.
        EditConfirmTitle: Account utente
        EditConfirmStatusDone: L'account utente è confermato ed è in attesa di approvazione. Grazie!
        EditApproveSubject: Approva l'account utente
        EditApproveMessage: Salve @usershort,\n\nper favore approva un nuovo account per l'utente @useraccount selezionando il seguente link.
        EditApproveTitle: Account utente
        EditApproveStatusDone: Account approvato. Grazie!
        EditReactivateSubject: Riattiva l'account utente.
        EditReactivateMessage: Salve @usershort,\n\nper favore riattiva il tuo account utente. Vi sono stati troppi tentativi di accesso non riusciti. Segui il seguente link.
        EditReactivateTitle: Account utente
        EditReactivateStatusDone: Account utente riattivato. Grazie!
        EditVerifySubject: Modifica l'account utente
        EditVerifyMessage: Salve @usershort,\n\per favore conferma un nuovo indirizzo email per il tuo account utente. Seleziona il seguente link.
        EditVerifyTitle: Account utente
        EditVerifyStatusDone: Account utente modificato. Grazie!
        EditChangeSubject: Modifica l'account utente
        EditChangeMessage: Salve @usershort,\n\nper favore conferma che vuoi modificare il tuo account utente. Segui il seguente link.
        EditChangeTitle: Account utente
        EditChangeStatusDone: Account utente modificato. Grazie!
        EditRemoveSubject: Cancella l'account utente
        EditRemoveMessage: Salve @usershort,\n\nper favore conferma che vuoi cancellare il tuo account utente. Seleziona il link seguente.
        EditRemoveTitle: Account utente
        EditRemoveStatusDone: Account utente cancellato. Grazie!
        EditRecoverSubject: Recupera l'account utente
        EditRecoverMessage: Salve @usershort,\n\nper favore conferma di aver perso la parola d'ordine selezionando il seguente link.
        EditWelcomeSubject: Benvenuto
        EditWelcomeMessage: Salve @usershort,\n\nil tuo account utente è stato creato. Buon lavoro!
        EditGoodbyeSubject: Arrivederci!
        EditGoodbyeMessage: Salve @usershort,\n\nil tuo account utente è stato cancellato. Arrivederci!
        EditAccountTitle: Utente
        EditAccountInformation: Puoi cancellare il tuo account utente in qualsiasi momento.
        EditAccountMore: Leggi di più…
        EditAccountStatusNone: Qui puoi cambiare il tuo account utente.
        EditAccountStatusInvalid: Inserisci per favore un indirizzo email valido.
        EditAccountStatusTaken: Inserisci per favore un indirizzo email diverso.
        EditAccountStatusWeak: Inserisci per favore una parola d'ordine diversa.
        EditAccountStatusShort: Inserisci per favore una parola d'ordine più lunga.
        EditAccountStatusNext: L'account utente sarà modificato, controlla per favore la tua posta elettronica.
        EditQuitTitle: Cancella l'account utente
        EditQuitStatusNone: Inserisci per favore il tuo nome per conferma.
        EditQuitStatusMismatch: Inserisci per favore un nome diverso.
        EditQuitStatusNext: L'account utente sarà cancellato, controlla per favore la tua posta elettronica.
        EditConfigureTitle: Sito
        EditConfigureSitename: Nome del sito:
        EditConfigureAuthor: Nome del gestore del sito:
        EditConfigureEmail: Indirizzo email del gestore del sito:
        EditConfigureInformation: Il gestore del sito può approvare nuovi account degli utenti.
        EditConfigureStatusNone: Qui puoi configurare il tuo sito.
        EditConfigureStatusInvalid: Inserisci per favore un indirizzo email valido.
        EditUpdateTitle: Aggiornamenti
        EditUpdateStatusNone: Datenstrom Yellow è fatto per le persone che creano siti.
        EditUpdateStatusCheck: Controllo degli aggiornamenti in corso…
        EditUpdateStatusUpdates: Sono disponibili i seguenti aggiornamenti:
        EditUpdateStatusOk: Il tuo sito è aggiornato.
        EditOkButton: Ok
        EditCancelButton: Annulla
        EditChangeButton: Cambia
        EditCreateButton: Crea
        EditEditButton: Salva
        EditDeleteButton: Elimina
        EditUpdateButton: Aggiorna
        EditEdit: Modifica la pagina
        EditCreate: +
        EditDelete: -
        EditKeyboardLabels: Ctrl+, Alt+, Shift+, ⌘, ⌥, ⇧
        EditToolbarFormat: Formato
        EditToolbarHeading: Titolo
        EditToolbarH1: Titolo 1
        EditToolbarH2: Titolo 2
        EditToolbarH3: Titolo 3
        EditToolbarParagraph: Testo normale
        EditToolbarPre: Codice sorgente
        EditToolbarNotice: Avviso
        EditToolbarQuote: Citazione
        EditToolbarBold: Neretto
        EditToolbarItalic: Corsivo
        EditToolbarStrikethrough: Barrato
        EditToolbarCode: Codice
        EditToolbarList: Elenco
        EditToolbarUl: • Elenco non numerato
        EditToolbarOl: 1. Elenco numerato
        EditToolbarTl: ✓ Elenco attività
        EditToolbarLink: Link
        EditToolbarFile: File
        EditToolbarEmojiawesome: Emoji
        EditToolbarFontawesome: Icona
        EditToolbarStatus: Stato
        EditToolbarUndo: Annulla
        EditToolbarRedo: Ripeti
        EditToolbarPreview: Anteprima
        EditToolbarHelp: Aiuto
        EditMailFooter: @sitename
        EditDataGenerated: Questa pagina è generata automaticamente.
        EditUploadProgress: Caricamento del file in corso…
        EditUserDescription: Editor
        EditMenuSettings: Impostazioni
        EditMenuHelp: Aiuto
        EditMenuLogout: Esci
        EditYellowUrl: https://datenstrom.se/yellow/
        EditYellowHelpUrl: https://datenstrom.se/yellow/help/
        EmojiawesomeDescription: Tantissime emoji.
        EnglishDescription: Inglese/English con lingua 'en'.
        FeedDescription: Canale RSS con le modifiche recenti.
        FontawesomeDescription: Icone e simboli.
        FrenchDescription: Francese/Français con lingua 'fr'.
        GalleryDescription: Galleria di immagini con popup.
        GermanDescription: Tedesco/Deutsch con lingua 'de'.
        GooglecalendarDescription: Inserisci un calendario Google.
        GooglemapDescription: Inserisci una mappa Google.
        HelpDescription: Aiuto per il tuo sito.
        HighlightDescription: Evidenzia sintatticamente il codice sorgente.
        HungarianDescription: Ungherese/Magyar con lingua 'hu'.
        ImageDescription: Immagini e miniature.
        ImageDefaultAlt: Immagine senza descrizione
        InstagramDescription: Inserisci fotografie Instagram.
        InstallTitle: Salve
        InstallLanguage: Qual è la tua lingua?
        InstallExtension: Che cosa vuoi fare?
        InstallExtensionWebsite: Un piccolo sito
        InstallExtensionBlog: Un piccolo blog
        InstallExtensionWiki: Un piccolo wiki
        InstallButton: Installa
        InstallHomeTitle: Inizio
        InstallHomeText: [image photo.jpg Esempio rounded]\n\n[edit - Puoi modificare questa pagina in un browser] o utilizzare un editor di testo. [Chiedi aiuto](https://datenstrom.se/yellow/help/).
        InstallAboutTitle: Informazioni
        InstallAboutText: [Realizzato con Datenstrom Yellow](https://datenstrom.se/yellow/).
        InstallDefaultTitle: Pagina
        InstallDefaultText: Questa è una nuova pagina.
        InstallBlogTitle: Pagina di blog
        InstallBlogText: Questa è una nuova pagina di blog.
        InstallWikiTitle: Pagina di wiki
        InstallWikiText: Questa è una nuova pagina di wiki.
        InstallExampleImage: Questa è un'immagine di esempio
        ItalianDescription: Italiano/Italiano con lingua 'it'.
        JapaneseDescription: Giapponese/日本語 con lingua 'ja'.
        MarkdownDescription: Formattazione facile del testo.
        MetaDescription: Metadati per uomini e macchine.
        NorwegianDescription: Norvegese/Norsk con lingua 'nb'.
        ParsedownDescription: Formattazione facile del testo.
        ParisDescription: Paris è un tema elegante.
        PolishDescription: Polacco/Polski con lingua 'pl'.
        PortugueseDescription: Portoghese/Português con lingua 'pt'.
        PreviousnextDescription: Mostra collegamenti alla pagina precedente e successiva.
        PreviousnextPagePrevious: ← Precedente: @title
        PreviousnextPageNext: Successivo: @title →
        PublishDescription: Crea e pubblica estensioni.
        RussianDescription: Russo/Русский con lingua 'ru'.
        SearchDescription: Ricerca globale.
        SearchResultsNone: Inserisci il termine da cercare.
        SearchResultsEmpty: Nessun risultato trovato.
        SearchSpecialChanges: Modifiche recenti
        SearchButton: Cerca
        ServeDescription: Server web integrato.
        SitemapDescription: Mappa del sito con tutte le pagine.
        SliderDescription: Galleria di immagini a scorrimento.
        SlovakDescription: Slovacco/Slovenčina con lingua 'sk'.
        SoundcloudDescription: Inserisci brani audio Soundcloud.
        SpanishDescription: Spagnolo/Español con lingua 'es'.
        StockholmDescription: Stockholm è un tema pulito.
        SwedishDescription: Svedese/Svenska con lingua 'sv'.
        TocDescription: Indice.
        TrafficDescription: Genera analisi del traffico dai file di registro.
        TurkishDescription: Turkish/Türkçe with language 'tr'.
        TwitterDescription: Inserisci messaggi Twitter.
        UpdateDescription: Mantieni aggiornato il tuo sito.
        UpdateExtensionDefaultDescription: Nessuna descrizione è disponibile.
        UpdateExtensionDeveloper: Sviluppato da @x.
        UpdateExtensionDesigner: Progettato da @x.
        UpdateExtensionTranslator: Tradotto da @x.
        WikiDescription: Wiki per il tuo sito.
        WikiModified: Ultimo aggiornamento il
        WikiTag: Etichetta:
        WikiSpecialPages: Tutte le pagine
        WikiSpecialChanges: Modifiche recenti
        YoutubeDescription: Inserisci video Youtube.
END;
    }
}
