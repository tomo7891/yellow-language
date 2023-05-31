<?php
// Danish extension, https://github.com/annaesvensson/yellow-language/tree/main/translations/danish

class YellowDanish {
    const VERSION = "0.8.43";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->language->setDefaults(array(
            "Language: da",
            "LanguageLocale: da_DK",
            "LanguageDescription: Dansk",
            "LanguageTranslator: David Garcia",
            "AudioDescription: HTML5 lydafspiller.",
            "BerlinDescription: Berlin er et tema inspireret af Dieter Rams.",
            "BlogDescription: Blog for your website.",
            "BlogBy: af",
            "BlogTag: Tags:",
            "BlogMore: Læs mere…",
            "BreadcrumbDescription: Breadcrumb navigation.",
            "BreadcrumbNavigation: Brødkrumme",
            "BundleDescription: Bundle website files.",
            "CatalanDescription: Catalan language.",
            "CheckDescription: Find broken links.",
            "ChineseDescription: Chinese language.",
            "CodefileDescription: Download code blocks as text file.",
            "ContactDescription: Email contact page.",
            "ContactName: Navn:",
            "ContactEmail: Email:",
            "ContactMessage: Besked:",
            "ContactConsent: Jeg accepterer, at denne hjemmeside gemmer min besked.",
            "ContactButton: Send min besked",
            "ContactMailSpam: [Spam]",
            "ContactMailHeader: You have received a message from @sender:",
            "ContactMailFooter: This email was sent via @sitename - @title",
            "ContactStatusNone: Sig hej. Vi er glad for dine kommentarer.",
            "ContactStatusIncomplete: Udfyld venligst alle felter.",
            "ContactStatusInvalid: Indtast en gyldig email.",
            "ContactStatusReview: Please remove links from the message.",
            "ContactStatusDone: Din email er blevet sendt. Mange tak!",
            "ContactStatusError: Din email er desværre ikke blevet sendt. Venligst forsøg igen senere!",
            "CopenhagenDescription: Copenhagen is a beautiful theme.",
            "CoreDescription: Hjemmets funktionalitet.",
            "CoreNavigation: Hoved",
            "CorePagination: Side",
            "CorePaginationPrevious: ← Forrige",
            "CorePaginationNext: Næste →",
            "CoreTimeFormatShort: H:i",
            "CoreTimeFormatMedium: H:i:s",
            "CoreTimeFormatLong: H:i:s T",
            "CoreDateFormatShort: F Y",
            "CoreDateFormatMedium: d.m.Y",
            "CoreDateFormatLong: d.m.Y H:i",
            "CoreDatePast: today, yesterday, @x days ago, 1 month ago, @x months ago, 1 year ago, @x years ago, on @x",
            "CoreDateFuture: soon, tomorrow, in @x days, in 1 month, in @x months, in 1 year, in @x years, on @x",
            "CoreDateMonthsNominative: januar, februar, marts, april, maj, juni, juli, august, september, oktober, november, december",
            "CoreDateMonthsGenitive: januar, februar, marts, april, maj, juni, juli, august, september, oktober, november, december",
            "CoreDateWeekdays: mandag, tirsdag, onsdag, torsdag, fredag, lørdag, søndag",
            "CoreDateWeekstart: mandag",
            "CoreDecimalSeparator: ,",
            "CoreError404Title: Fil ikke fundet",
            "CoreError404Text: Den ønskede fil blev ikke fundet. Åh nej...",
            "CoreError420Title: Page not public",
            "CoreError420Text: The requested page is not public. [yellow error]",
            "CoreError430Title: Login failed",
            "CoreError430Text: The email or password is incorrect. [Please try again](#data-action-login).",
            "CoreError434Title: Page not found",
            "CoreError434Text: The requested page was not found. [You can create this page](#data-action-edit).",
            "CoreError435Title: Page not found",
            "CoreError435Text: The requested page has been deleted. [You can restore this page](#data-action-restore).",
            "CoreError450Title: Update error",
            "CoreError450Text: Can't connect to the update server. An Internet connection is required.",
            "CoreError500Title: Server error",
            "CoreError500Text: Something went wrong. [yellow error]",
            "CsvDescription: CSV file parser.",
            "CzechDescription: Czech language.",
            "DailyDescription: Show daily pages.",
            "DanishDescription: Danish language.",
            "DisqusDescription: Show Disqus comments on blog.",
            "DraftDescription: Support for draft pages.",
            "DraftPageError: Please log in.",
            "DutchDescription: Dutch language.",
            "EditDescription: Rediger dit websted i en webbrowser.",
            "EditLoginTitle: Velkommen",
            "EditLoginEmail: Email:",
            "EditLoginPassword: Adgangskode:",
            "EditLoginForgot: Forgot your password?",
            "EditLoginSignup: Create user account?",
            "EditLoginButton: Log in",
            "EditSignupTitle: Create user account",
            "EditSignupName: Navn:",
            "EditSignupEmail: Email:",
            "EditSignupPassword: Adgangskode:",
            "EditSignupConsent: Jeg accepterer, at mine personlige data vil blive opbevaret af denne hjemmeside.",
            "EditSignupButton: Create",
            "EditSignupStatusNone: Here you can create a new user account.",
            "EditSignupStatusIncomplete: Please fill out all fields.",
            "EditSignupStatusInvalid: Please enter a valid email.",
            "EditSignupStatusWeak: Please enter a different password.",
            "EditSignupStatusShort: Please enter a longer password.",
            "EditSignupStatusNext: User account will be created, please check your emails.",
            "EditForgotTitle: Forgot your password",
            "EditForgotEmail: Email:",
            "EditForgotStatusNone: No problem, you can create a new password.",
            "EditForgotStatusInvalid: Please enter a valid email.",
            "EditForgotStatusNext: User account will be recovered, please check your emails.",
            "EditRecoverTitle: Forgot your password",
            "EditRecoverPassword: Password:",
            "EditRecoverStatusPassword: Please enter a new password.",
            "EditRecoverStatusWeak: Please enter a different password.",
            "EditRecoverStatusShort: Please enter a longer password.",
            "EditRecoverStatusDone: User account recovered. Thank you!",
            "EditConfirmSubject: Confirm user account",
            "EditConfirmMessage: Hi @usershort,\\n\\nplease confirm your user account. Click the following link.",
            "EditConfirmTitle: User account",
            "EditConfirmStatusDone: User account confirmed and waiting for approval. Thank you!",
            "EditApproveSubject: Approve user account",
            "EditApproveMessage: Hi @usershort,\\n\\nplease approve a new user account for @useraccount. Click the following link.",
            "EditApproveTitle: User account",
            "EditApproveStatusDone: User account approved. Thank you!",
            "EditReactivateSubject: Reactivate user account",
            "EditReactivateMessage: Hi @usershort,\\n\\nplease reactivate your user account. There were too many failed login attempts. Click the following link.",
            "EditReactivateTitle: User account",
            "EditReactivateStatusDone: User account reactivated. Thank you!",
            "EditVerifySubject: Change user account",
            "EditVerifyMessage: Hi @usershort,\\n\\nplease confirm a new email for your user account. Click the following link.",
            "EditVerifyTitle: User account",
            "EditVerifyStatusDone: User account changed. Thank you!",
            "EditChangeSubject: Change user account",
            "EditChangeMessage: Hi @usershort,\\n\\nplease confirm that you want to change your user account. Click the following link.",
            "EditChangeTitle: User account",
            "EditChangeStatusDone: User account changed. Thank you!",
            "EditRemoveSubject: Delete user account",
            "EditRemoveMessage: Hi @usershort,\\n\\nplease confirm that you want to delete your user account. Click the following link.",
            "EditRemoveTitle: User account",
            "EditRemoveStatusDone: User account deleted. Thank you!",
            "EditRecoverSubject: Recover user account",
            "EditRecoverMessage: Hi @usershort,\\n\\nplease confirm that you forgot your password. Click the following link.",
            "EditWelcomeSubject: Welcome",
            "EditWelcomeMessage: Hi @usershort,\\n\\nyour user account has been created. Have fun editing the website.",
            "EditGoodbyeSubject: Goodbye",
            "EditGoodbyeMessage: Hi @usershort,\\n\\nyour user account has been deleted. Take care.",
            "EditAccountTitle: User",
            "EditAccountInformation: You can delete your user account anytime.",
            "EditAccountMore: Read more…",
            "EditAccountStatusNone: Here you can change your user account.",
            "EditAccountStatusInvalid: Please enter a valid email.",
            "EditAccountStatusTaken: Please enter a different email.",
            "EditAccountStatusWeak: Please enter a different password.",
            "EditAccountStatusShort: Please enter a longer password.",
            "EditAccountStatusNext: User account will be changed, please check your emails.",
            "EditQuitTitle: Delete user account",
            "EditQuitStatusNone: Please enter your name to confirm.",
            "EditQuitStatusMismatch: Please enter a different name.",
            "EditQuitStatusNext: User account will be deleted, please check your emails.",
            "EditConfigureTitle: Website",
            "EditConfigureSitename: Name of the website:",
            "EditConfigureAuthor: Name of the webmaster:",
            "EditConfigureEmail: Email of the webmaster:",
            "EditConfigureInformation: The webmaster can approve new user accounts.",
            "EditConfigureStatusNone: Here you can configure your website.",
            "EditConfigureStatusInvalid: Please enter a valid email.",
            "EditUpdateTitle: Updates",
            "EditUpdateStatusNone: Datenstrom Yellow is for people who make small websites.",
            "EditUpdateStatusCheck: Checking for updates…",
            "EditUpdateStatusUpdates: The following updates are available:",
            "EditUpdateStatusOk: Your website is up to date.",
            "EditOkButton: Ok",
            "EditCancelButton: Fortryd",
            "EditChangeButton: Skift",
            "EditCreateButton: Ny",
            "EditEditButton: Gem",
            "EditDeleteButton: Slet",
            "EditUpdateButton: Update",
            "EditEdit: Rediger side",
            "EditCreate: +",
            "EditDelete: -",
            "EditKeyboardLabels: Ctrl+, Alt+, Skift+, ⌘, ⌥, ⇧",
            "EditToolbarFormat: Format",
            "EditToolbarHeading: Heading",
            "EditToolbarH1: Heading 1",
            "EditToolbarH2: Heading 2",
            "EditToolbarH3: Heading 3",
            "EditToolbarParagraph: Normal text",
            "EditToolbarPre: Source code",
            "EditToolbarNotice: Notice",
            "EditToolbarQuote: Quote",
            "EditToolbarBold: Bold",
            "EditToolbarItalic: Italic",
            "EditToolbarStrikethrough: Strikethrough",
            "EditToolbarCode: Code",
            "EditToolbarList: List",
            "EditToolbarUl: • Unordered list",
            "EditToolbarOl: 1. Ordered list",
            "EditToolbarTl: ✓ Task list",
            "EditToolbarLink: Link",
            "EditToolbarFile: File",
            "EditToolbarEmoji: Emoji",
            "EditToolbarIcon: Icon",
            "EditToolbarStatus: Status",
            "EditToolbarUndo: Undo",
            "EditToolbarRedo: Redo",
            "EditToolbarPreview: Kamelåså",
            "EditToolbarHelp: Hjælp",
            "EditMailFooter: @sitename",
            "EditDataGenerated: This page is generated automatically.",
            "EditUploadProgress: Uploading file…",
            "EditUserDescription: Editor",
            "EditMenuSettings: Settings",
            "EditMenuHelp: Hjælp",
            "EditMenuLogout: Log ud",
            "EditYellowUrl: https://datenstrom.se/yellow/",
            "EditYellowHelpUrl: https://datenstrom.se/yellow/help/",
            "EditYellowNewsUrl: https://datenstrom.se/yellow/help/what-s-new",
            "EmojiDescription: Lots and lots of emoji.",
            "EnglishDescription: English language.",
            "FeedDescription: Feed with recent changes.",
            "FrenchDescription: French language.",
            "GalleryDescription: Image gallery with popup.",
            "GenerateDescription: Generer en statisk hjemmeside.",
            "GermanDescription: German language.",
            "GooglecalendarDescription: Embed Google calendar.",
            "GooglemapDescription: Embed Google map.",
            "HelloworldDescription: Make animated text.",
            "HelpDescription: Help for your website.",
            "HighlightDescription: Highlight source code.",
            "HungarianDescription: Hungarian language.",
            "IconDescription: Icons and symbols.",
            "ImageDescription: Images and thumbnails.",
            "ImageDefaultAlt: Image without description",
            "InstagramDescription: Embed Instagram photos.",
            "InstallTitle: Hej",
            "InstallLanguage: Hvad er dit sprog?",
            "InstallExtension: Hvad vil du lave?",
            "InstallExtensionWebsite: Lille internet side",
            "InstallExtensionBlog: Lille blog",
            "InstallExtensionWiki: Lille wiki",
            "InstallButton: Installer",
            "InstallHomeTitle: Home",
            "InstallHomeText: [image photo.jpg Example rounded]\\n\\n[edit - You can edit this page in a web browser] or use a text editor. [Get help](https://datenstrom.se/yellow/help/).",
            "InstallAboutTitle: About",
            "InstallAboutText: [Made with Datenstrom Yellow](https://datenstrom.se/yellow/).",
            "InstallDefaultTitle: Page",
            "InstallDefaultText: This is a new page.",
            "InstallBlogTitle: Blog page",
            "InstallBlogText: This is a new blog page.",
            "InstallWikiTitle: Wiki page",
            "InstallWikiText: This is a new wiki page.",
            "InstallExampleImage: This is an example image",
            "ItalianDescription: Italian language.",
            "JapaneseDescription: Japanese language.",
            "MarkdownDescription: Text formatting for humans.",
            "MetaDescription: Meta data for humans and machines.",
            "NorwegianDescription: Norwegian language.",
            "ParisDescription: Paris is an elegant theme.",
            "ParsedownDescription: Text formatting for humans.",
            "PodcastDescription: Web feed optimized for podcast publishing.",
            "PolishDescription: Polish language.",
            "PortugueseDescription: Portuguese language.",
            "PreviousnextDescription: Vis links til forrige/næste side.",
            "PreviousnextNavigation: Side",
            "PreviousnextPagePrevious: ← Forrige: @title",
            "PreviousnextPageNext: Næste: @title →",
            "PrivateDescription: Support for password-protected pages.",
            "PrivatePageError: Please enter the password.",
            "ProfileDescription: Author profile for blog pages.",
            "PublishDescription: Make and publish extensions.",
            "RadiobossDescription: Widgets for RadioBoss Cloud.",
            "RandomDescription: Display random pages.",
            "ReadingtimeDescription: Show estimated reading time for page content.",
            "RedirectDescription: Alternative page redirection.",
            "RussianDescription: Russian language.",
            "SearchDescription: Full-text search.",
            "SearchResultsNone: Indtast ny søgning.",
            "SearchResultsEmpty: Ingen resultater fundet.",
            "SearchSpecialChanges: Ny ændringer",
            "SearchButton: Søg",
            "ServeDescription: Built-in web server.",
            "SitemapDescription: Sitemap with all pages.",
            "SliderDescription: Image gallery with slider.",
            "SlovakDescription: Slovak language.",
            "SoundcloudDescription: Embed Soundcloud audio tracks.",
            "SpanishDescription: Spanish language.",
            "SpoilerDescription: Hide certain page elements.",
            "StockholmDescription: Stockholm er et rent tema.",
            "SwedishDescription: Swedish language.",
            "TocDescription: Table of contents.",
            "TrafficDescription: Create traffic analytics from log files.",
            "TurkishDescription: Turkish language.",
            "TwitterDescription: Embed Twitter messages.",
            "UpdateDescription: Hold dit websted opdateret.",
            "UpdateExtensionDefaultDescription: No description available.",
            "UpdateExtensionDeveloper: Developed by @x.",
            "UpdateExtensionDesigner: Designed by @x.",
            "UpdateExtensionTranslator: Translated by @x.",
            "WikiDescription: Wiki for your website.",
            "WikiModified: Sidst opdateret den",
            "WikiTag: Tags:",
            "WikiSpecialPages: Alle sider",
            "WikiSpecialChanges: Ny ændringer",
            "WittstockDescription: Wittstock is a classless theme.",
            "YoutubeDescription: Embed Youtube videos."));
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("language" => "da"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="da") {
            $this->yellow->system->save($fileName, array("language" => $this->yellow->system->getDifferent("language")));
        }
    }
}
