<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('nn', array (
  'validators' => 
  array (
    'This value should be false.' => 'Verdien skulle ha vore tom/nei.',
    'This value should be true.' => 'Verdien skulla ha vore satt/ja.',
    'This value should be of type {{ type }}.' => 'Verdien må vere av typen {{ type }}.',
    'This value should be blank.' => 'Verdien skal vere blank.',
    'The value you selected is not a valid choice.' => 'Verdien du valde er ikkje gyldig.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Du må gjere minst {{ limit }} val.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Du kan maksimalt gjere {{ limit }} val.',
    'One or more of the given values is invalid.' => 'Ein eller fleire av dei opplyste verdiane er ugyldige.',
    'This field was not expected.' => 'Dette feltet var ikke forventa.',
    'This field is missing.' => 'Dette feltet mangler.',
    'This value is not a valid date.' => 'Verdien er ikkje ein gyldig dato.',
    'This value is not a valid datetime.' => 'Verdien er ikkje ein gyldig dato og tid.',
    'This value is not a valid email address.' => 'Verdien er ikkje ei gyldig e-postadresse.',
    'The file could not be found.' => 'Fila er ikkje funnen.',
    'The file is not readable.' => 'Fila kan ikkje lesast.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fila er for stor ({{ size }} {{ suffix }}). Maksimal storleik er {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mime-typen av fila er ugyldig ({{ type }}). Tillatne mime-typar er {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Verdien må vere {{ limit }} eller mindre.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Verdien er for lang. Den må vere {{ limit }} bokstavar eller mindre.',
    'This value should be {{ limit }} or more.' => 'Verdien må vere {{ limit }} eller meir.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Verdien er for kort. Den må ha {{ limit }} teikn eller fleire.',
    'This value should not be blank.' => 'Verdien kan ikkje vere blank.',
    'This value should not be null.' => 'Verdien kan ikkje vere tom (null).',
    'This value should be null.' => 'Verdien må vere tom (null).',
    'This value is not valid.' => 'Verdien er ikkje gyldig.',
    'This value is not a valid time.' => 'Verdien er ikkje ei gyldig tidseining.',
    'This value is not a valid URL.' => 'Verdien er ikkje ein gyldig URL.',
    'The two values should be equal.' => 'Dei to verdiane må vere like.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fila er for stor. Den maksimale storleiken er {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fila er for stor.',
    'The file could not be uploaded.' => 'Fila kunne ikkje bli lasta opp.',
    'This value should be a valid number.' => 'Verdien må vere eit gyldig tal.',
    'This file is not a valid image.' => 'Fila er ikkje eit gyldig bilete.',
    'This is not a valid IP address.' => 'Dette er ikkje ei gyldig IP-adresse.',
    'This value is not a valid language.' => 'Verdien er ikkje eit gyldig språk.',
    'This value is not a valid locale.' => 'Verdien er ikkje ein gyldig lokalitet (språk/region).',
    'This value is not a valid country.' => 'Verdien er ikkje eit gyldig land.',
    'This value is already used.' => 'Verdien er allereie i bruk.',
    'The size of the image could not be detected.' => 'Storleiken på biletet kunne ikkje oppdagast.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Biletbreidda er for stor, ({{ width }} pikslar). Tillaten maksimumsbreidde er {{ max_width }} pikslar.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Biletbreidda er for liten, ({{ width }} pikslar). Forventa minimumsbreidde er {{ min_width }} pikslar.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Bilethøgda er for stor, ({{ height }} pikslar). Tillaten maksimumshøgde er {{ max_height }} pikslar.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Billethøgda er for låg, ({{ height }} pikslar). Forventa minimumshøgde er {{ min_height }} pikslar.',
    'This value should be the user\'s current password.' => 'Verdien må vere brukaren sitt noverande passord.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Verdien må vere nøyaktig {{ limit }} teikn.',
    'The file was only partially uploaded.' => 'Fila vart berre delvis lasta opp.',
    'No file was uploaded.' => 'Inga fil vart lasta opp.',
    'No temporary folder was configured in php.ini.' => 'Førebels mappe (tmp) er ikkje konfigurert i php.ini.',
    'Cannot write temporary file to disk.' => 'Kan ikkje skrive førebels fil til disk.',
    'A PHP extension caused the upload to fail.' => 'Ei PHP-udviding forårsaka feil under opplasting.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Denne samlinga må innehalde {{ limit }} element eller meir.|Denne samlinga må innehalde {{ limit }} element eller meir.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Denne samlinga må innehalde {{ limit }} element eller færre.|Denne samlinga må innehalde {{ limit }} element eller færre.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Denne samlinga må innehalde nøyaktig {{ limit }} element.|Denne samlinga må innehalde nøyaktig {{ limit }} element.',
    'Invalid card number.' => 'Ugyldig kortnummer.',
    'Unsupported card type or invalid card number.' => 'Korttypen er ikkje støtta, eller kortnummeret er ugyldig.',
    'This form should not contain extra fields.' => 'Feltgruppa må ikkje innehalde ekstra felt.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Fila du lasta opp var for stor. Last opp ei mindre fil.',
    'The CSRF token is invalid.' => 'CSRF-nøkkelen er ikkje gyldig.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Innlogginga har feila.',
    'Authentication credentials could not be found.' => 'Innloggingsinformasjonen vart ikkje funnen.',
    'Authentication request could not be processed due to a system problem.' => 'Innlogginga vart ikkje fullført på grunn av ein systemfeil.',
    'Invalid credentials.' => 'Ugyldig innloggingsinformasjon.',
    'Cookie has already been used by someone else.' => 'Informasjonskapselen er allereie brukt av ein annan brukar.',
    'Not privileged to request the resource.' => 'Du har ikkje åtgang til å be om denne ressursen.',
    'Invalid CSRF token.' => 'Ugyldig CSRF-teikn.',
    'No authentication provider found to support the authentication token.' => 'Fann ingen innloggingstilbydar som støttar dette innloggingsteiknet.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ingen sesjon tilgjengeleg. Sesjonen er anten ikkje lenger gyldig, eller informasjonskapslar er ikke skrudd på i nettlesaren.',
    'No token could be found.' => 'Fann ingen innloggingsteikn.',
    'Username could not be found.' => 'Fann ikkje brukarnamnet.',
    'Account has expired.' => 'Brukarkontoen er utgjengen.',
    'Credentials have expired.' => 'Innloggingsinformasjonen er utgjengen.',
    'Account is disabled.' => 'Brukarkontoen er deaktivert.',
    'Account is locked.' => 'Brukarkontoen er sperra.',
  ),
));

$catalogueEs = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini o la carpeta configurada no existe.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'Este valor no es un UUID válido.',
    'This value should be a multiple of {{ compared_value }}.' => 'Este valor debería ser múltiplo de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Este Código de Identificación Bancaria (BIC) no está asociado con el IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Este valor debería ser un JSON válido.',
    'This collection should contain only unique elements.' => 'Esta colección debería tener exclusivamente elementos únicos.',
    'This value should be positive.' => 'Este valor debería ser positivo.',
    'This value should be either positive or zero.' => 'Este valor debería ser positivo o igual a cero.',
    'This value should be negative.' => 'Este valor debería ser negativo.',
    'This value should be either negative or zero.' => 'Este valor debería ser negativo o igual a cero.',
    'This value is not a valid timezone.' => 'Este valor no es una zona horaria válida.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Esta contraseña no se puede utilizar porque está incluida en un listado de contraseñas públicas obtenido gracias a fallos de seguridad de otros sitios y aplicaciones. Por favor utilice otra contraseña.',
    'This value should be between {{ min }} and {{ max }}.' => 'Este valor debería estar entre {{ min }} y {{ max }}.',
    'This value is not a valid hostname.' => 'Este valor no es un nombre de host válido.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'El número de elementos en esta colección debería ser múltiplo de {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Este valor debería satisfacer al menos una de las siguientes restricciones:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Cada elemento de esta colección debería satisfacer su propio conjunto de restricciones.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Anterior',
    'label_next' => 'Siguiente',
    'filter_searchword' => 'Buscar...',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEs);

return $catalogue;
