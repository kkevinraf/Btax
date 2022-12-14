CHANGELOG for 2.4.x
===================

This changelog references the relevant changes (bug and security fixes) done
in 2.4 minor versions.

To get the diff for a specific change, go to https://github.com/symfony/symfony/commit/XXX where XXX is the change hash
To get the diff between two versions, go to https://github.com/symfony/symfony/compare/v2.4.0...v2.4.1

* 2.4.2 (2014-02-12)

 * bug #10215 [Routing] reduced recursion in dumper (arnaud-lb)
 * bug #10207 [DomCrawler] Fixed filterXPath() chaining (robbertkl)
 * bug #10205 [DomCrawler] Fixed incorrect handling of image inputs (robbertkl)
 * bug #10191 [HttpKernel] fixed wrong reference in TraceableEventDispatcher (fabpot)
 * bug #10195 [Debug] Fixed recursion level incrementing in FlattenException::flattenArgs(). (sun)
 * bug #10151 [Form] Update DateTime objects only if the actual value has changed (peterrehm)
 * bug #10140 allow the TextAreaFormField to be used with valid/invalid HTML (dawehner)
 * bug #10131 added lines to exceptions for the trans and transchoice tags (fabpot)
 * bug #10002 Routing condition bugfix (marco-jantke)
 * bug #10119 [Validator] Minor fix in XmlFileLoader (florianv)
 * bug #10078 [BrowserKit] add non-standard port to HTTP_HOST server param (kbond)
 * bug #10095 [Security] fix DI for SimpleFormAuthenticationListener (Tobion)
 * bug #10091 [Translation] Update PluralizationRules.php (guilhermeblanco)
 * bug #10053 [Form] fixed allow render 0 numeric input value (dczech)
 * bug #10067 [HttpKernel] allow null value in fragment handler (kbond)
 * bug #10042 [Expression Language] fix foo[index] (schokocappucino)
 * bug #10033 [HttpKernel] Bugfix - Logger Deprecation Notice (Rican7)
 * bug #10023 [FrameworkBundle] Thrown an HttpException instead returning a Response in RedirectController::redirectAction() (jakzal)
 * bug #9985 Prevent WDT from creating a session (mvrhov)
 * bug #10010 [Twig Bridge] Fixed bug in ExpressionExtension (ricbra)
 * bug #10000 [Console] Fixed the compatibility with HHVM (stof)
 * bug #9979 [Doctrine Bridge][Validator] Fix for null values in assosiated properties when using UniqueEntityValidator (vpetrovych)
 * bug #9983 [TwigBridge] Update min. version of Twig (stloyd)
 * bug #9970 [CssSelector] fixed numeric attribute issue (jfsimon)
 * bug #9747 [DoctrineBridge] Fix: Add type detection. Needed by pdo_dblib (iamluc)
 * bug #9962 [Process] Fix #9861 : Revert TTY mode (romainneutron)
 * bug #9960 [Form] Update minimal requirement in composer.json (stloyd)
 * bug #9952 [Translator] Fix Empty translations with Qt files (vlefort)
 * bug #9957 [Console] Fixed command name guessing if an alternative is an alias (jakzal)
 * bug #9948 [WebProfilerBundle] Fixed profiler toolbar icons for XHTML. (rafalwrzeszcz)
 * bug #9933 Propel1 exception message (jaugustin)
 * bug #9949 [BrowserKit] Throw exception on invalid cookie expiration timestamp (anlutro)

* 2.4.1 (2014-01-05)

 * bug #9938 [Process] Add support SAPI cli-server (peter-gribanov)
 * bug #9940 [EventDispatcher] Fix hardcoded listenerTag name in error message (lemoinem)
 * bug #9923 [DoctrineBridge] Fixed an issue with DoctrineParserCache (florianv)
 * bug #9908 [HttpFoundation] Throw proper exception when invalid data is passed to JsonResponse class (stloyd)
 * bug #9902 [Security] fixed pre/post authentication checks (fabpot)
 * bug #9910 fixed missing use statements (fabpot)
 * bug #9895 [Intl] Added round support for ROUND_CEILING, ROUND_FLOOR, ROUND_DOWN, ROUND_UP (pamil)
 * bug #9899 [Filesystem | WCM] 9339 fix stat on url for filesystem copy (cordoval)
 * bug #9589 [DependencyInjection] Fixed #9020 - Added support for collections in service#parameters (lavoiesl)
 * bug #9889 [Console] fixed column width when using the Table helper with some decoration in cells (fabpot)
 * bug #9323 [DomCrawler]fix #9321 Crawler::addHtmlContent add gbk encoding support (bronze1man)
 * bug #8997 [Security] Fixed problem with losing ROLE_PREVIOUS_ADMIN role. (pawaclawczyk)
 * bug #9557 [DoctrineBridge] Fix for cache-key conflict when having a \Traversable as choices (DRvanR)
 * bug #9879 [Security] Fix ExceptionListener to catch correctly AccessDeniedException if is not first exception (fabpot)
 * bug #9885 [Dependencyinjection] Fixed handling of inlined references in the AnalyzeServiceReferencesPass (fabpot)
 * bug #9884 [DomCrawler] Fixed creating form objects from named form nodes (jakzal)
 * bug #9882 Add support for HHVM in the getting of the PHP executable (fabpot)
 * bug #9850 [Validator] Fixed IBAN validator with 0750447346 value (stewe)
 * bug #9865 [Validator] Fixes message value for objects (jongotlin)
 * bug #9441 [Form][DateTimeToArrayTransformer] Check for hour, minute & second validity (egeloen)
 * bug #9720 [FrameworkBundle] avoid tables to have apparently long blank line breaks and be too far appart for long nested array params (cordoval)
 * bug #9867 #9866 [Filesystem] Fixed mirror for symlinks (COil)
 * bug #9806 [Security] Fix parent serialization of user object (ddeboer)
 * bug #9834 [DependencyInjection] Fixed support for backslashes in service ids. (jakzal)
 * bug #9826 fix #9356 [Security] Logger should manipulate the user reloaded from provider (matthieuauger)
 * feature #9775 [FrameworkBundle] Added extra details in XMLDescriptor to improve container description (Exelenz)
 * bug #9771 Crawler default namespace fix (crudecki)
 * bug #9769 [BrowserKit] fixes #8311 CookieJar is totally ignorant of RFC 6265 edge cases (jzawadzki)
 * bug #9697 [Config] fix 5528 let ArrayNode::normalizeValue respect order of value array provided (cordoval)
 * bug #9701 [Config] fix #7243 allow 0 as arraynode name (cordoval)
 * bug #9795 [Form] Fixed issue in BaseDateTimeTransformer when invalid timezone cause Trans... (tyomo4ka)
 * bug #9714 [HttpFoundation] BinaryFileResponse should also return 416 or 200 on some range-requets (SimonSimCity)
 * bug #9601 [Routing] Remove usage of deprecated _scheme requirement (Danez)
 * bug #9489 [DependencyInjection] Add normalization to tag options (WouterJ)
 * bug #9135 [Form] [Validator] fix maxLength guesser (franek)
 * bug #9790 [Filesystem] Changed the mode for a target file in copy() to be write only (jakzal)
 * bug #9758 [Console] fixed TableHelper when cell value has new line (k-przybyszewski)
 * bug #9760 [Routing] Fix router matching pattern against multiple hosts (karolsojko)
 * bug #9768 [FrameworkBundle] Fixed bug in XMLDescriptor (Exelenz)
 * bug #9700 [ExpressionLanguage] throw exception when parameters contain expressions (aitboudad)
 * bug #9674 [Form] rename validators.ua.xlf to validators.uk.xlf (craue)
 * bug #9722 [Validator]Fixed getting wrong msg when value is an object in Exception (aitboudad)
 * bug #9750 allow TraceableEventDispatcher to reuse event instance in nested events (evillemez)
 * bug #9718 [validator] throw an exception if isn't an instance of ConstraintValidatorInterface. (aitboudad)
 * bug #9716 Reset the box model to content-box in the web debug toolbar (stof)
 * bug #9711 [FrameworkBundle] Allowed "0" as a checkbox value in php templates (jakzal)

* 2.4.0 (2013-12-03)

 * bug #9673 Fixed BC break in csrf protection (WouterJ)
 * bug #9665 [Bridge/Doctrine] ORMQueryBuilderLoader - handled the scenario when no entity manager is passed with closure query builder (jakzal)
 * bug #9662 [FrameworkBundle] Enabled csrf_protection by default if form.csrf_protection is enabled (bschussek)
 * bug #9656 [DoctrineBridge] normalized class names in the ORM type guesser (fabpot)
 * bug #9647 use the correct class name to retrieve mapped class' metadata and reposi... (xabbuh)
 * bug #9648 [Debug] ensured that a fatal PHP error is actually fatal after being handled by our error handler (fabpot)
 * bug #9643 [WebProfilerBundle] Fixed js escaping in time.html.twig (hason)
 * bug #9641 [Debug] Avoid notice from being "eaten" by fatal error. (fabpot)
 * bug #9639 Modified guessDefaultEscapingStrategy to not escape txt templates (fabpot)
 * bug #9314 [Form] Fix DateType for 32bits computers. (WedgeSama)
 * bug #9443 [FrameworkBundle] Fixed the registration of validation.xml file when the form is disabled (hason)
 * bug #9625 [HttpFoundation] Do not return an empty session id if the session was closed (Taluu)
 * bug #9621 [ExpressionLanguage] fixed lexing expression ending with spaces (fabpot)
 * bug #9637 [Validator] Replaced inexistent interface (jakzal)
 * bug #9628 [HttpKernel] Fix profiler event-listener usage outside request stack context (romainneutron)
 * bug #9624 [Console] Fix undefined offset when formatting namespace suggestions (GromNaN)
 * bug #9605 Adjusting CacheClear Warmup method to namespaced kernels (rdohms)
 * bug #9617 [HttpKernel] Http kernel regression fix (hhamon)
 * bug #9610 Container::camelize also takes backslashes into consideration (ondrejmirtes)

* 2.4.0-RC1 (2013-11-25)

 * bug #9607 [HttpKernel] Fix a bug when using the kernel property in overridden method Client::setServerParameters() (gnutix)
 * bug #9597 [Security] Typos in Security's ExpressionLanguage (ovrflo)
 * feature #9587 [SecurityBundle] Added csrf_token_generator and csrf_token_id as new (shieldo)
 * feature #9578 [DomCrawler] Fixes `attr` method returning empty string for missing attributes (aik099)
 * bug #9565 [Debug] Fixed ClassNotFoundFatalErrorHandler which could cause a fatal error (jakzal)
 * bug #9525 Cache Warmup Breaks Namespaced Kernel (rdohms)
 * bug #9447 [BrowserKit] fixed protocol-relative url redirection (jong99)
 * bug #9535 No Entity Manager defined exception (armetiz)
 * bug #9485 [Acl] Fix for issue #9433 (guilro)
 * bug #9516 [AclProvider] Fix incorrect behavior when partial results returned from cache (superdav42)
 * feature #9546 [FrameworkBundle] use the new request_stack service in the GlobalVariables object (hhamon)
 * bug #9566 [Console] Revert BC-break for verbose option value (chEbba)
 * bug #9553 [FrameworkBundle] use the new request_stack service to get the Request object in the base Controller class (hhamon)
 * feature #9541 [Translation] make IdentityTranslater consistent with normal translator (Tobion)
 * bug #9536 [FrameworkBundle] Update 2 dependencies (currently broken) (asm89)
 * bug #9352 [Intl] make currency bundle merge fallback locales when accessing data, ... (shieldo)
 * bug #9537 [FrameworkBundle] Fix mistake in translation's service definition. (phpmike)
 * bug #9529 [ExpressionLanguage] Fixed conflict between punctation and range (WouterJ)
 * bug #9367 [Process] Check if the pipe array is empty before calling stream_select() (jfposton)
 * bug #9211 [Form] Fixed memory leak in FormValidator (bschussek)
 * bug #9469 [Propel1] re-factor Propel1 ModelChoiceList (havvg)
 * bug #9499 Request::overrideGlobals() may call invalid ini value (denkiryokuhatsuden)
 * feature #9494 made Router implement RequestMatcherInterface (fabpot)
 * bug #9420 [Console][ProgressHelper] Fix ProgressHelper redraw when redrawFreq is greater than 1 (giosh94mhz)
 * bug #9212 [Validator] Force Luhn Validator to only work with strings (Richtermeister)
 * bug #9476 Fixed bug with lazy services (peterrehm)
 * bug #9461 set mergeFallback to true, (ychadwick)
 * bug #9451 Fix bug with variable named context to securityContext (mieszko4)
 * feature #9434 moved logic for the session listeners into the HttpKernel component (fabpot)
 * bug #9431 [DependencyInjection] fixed YamlDumper did not make services private. (realityking)
 * bug #9332 [Config] Quoting reserved characters (WouterJ)
 * bug #9416 fixed issue with clone now the children of the original form are preserved and the clone form is given new children (yjv)
 * bug #9423 [Form] fix CsrfProviderAdapter (Tobion)
 * feature #9342 Add X-Debug-Url profiler url header (adrienbrault)
 * bug #9412 [HttpFoundation] added content length header to BinaryFileResponse (kbond)

* 2.4.0-BETA2 (2013-10-30)

 * bug #9408 [Form] Fixed failing FormDataExtractorTest (bschussek)
 * bug #9397 [BUG][Form] Fix nonexistent key id in twig of data collector (francoispluchino)
 * bug #9395 [HttpKernel] fixed memory limit display in MemoryDataCollector (hhamon)
 * bug #9168 [FrameworkBundle] made sure that the debug event dispatcher is used everywhere (fabpot)
 * bug #9388 [Form] Fixed: The "data" option is taken into account even if it is NULL (bschussek)
 * bug #9394 [Form] Fixed form debugger to work even when no view variables are logged (bschussek)
 * bug #9391 [Serializer] Fixed the error handling when decoding invalid XML to avoid a Warning (stof)
 * feature #9365 prevent PHP from magically setting a 302 header (lsmith77)
 * feature #9252 [FrameworkBundle] Only enable CSRF protection when enabled in config (asm89)
 * bug #9378 [DomCrawler] [HttpFoundation] Make `Content-Type` attributes identification case-insensitive (matthieuprat)
 * bug #9354 [Process] Fix #9343 : revert file handle usage on Windows platform (romainneutron)
 * bug #9335 [Form] Improved FormTypeCsrfExtension to use the type class as default intention if the form name is empty (bschussek)
 * bug #9334 [Form] Improved FormTypeCsrfExtension to use the type class as default intention if the form name is empty (bschussek)
 * bug #9333 [Form] Improved FormTypeCsrfExtension to use the type class as default intention if the form name is empty (bschussek)
 * bug #9338 [DoctrineBridge] Added type check to prevent calling clear() on arrays (bschussek)
 * bug #9330 [Config] Fixed namespace when dumping reference (WouterJ)
 * bug #9329 [Form] Changed FormTypeCsrfExtension to use the form's name as default token ID (bschussek)
 * bug #9328 [Form] Changed FormTypeCsrfExtension to use the form's name as default intention (bschussek)
 * bug #9327 [Form] Changed FormTypeCsrfExtension to use the form's name as default intention (bschussek)
 * bug #9316 [WebProfilerBundle] Fixed invalid condition in form panel (bschussek)
 * bug #9308 [DoctrineBridge] Loosened CollectionToArrayTransformer::transform() to accept arrays (bschussek)
 * bug #9297 [Form] Add missing use in form renderer (egeloen)
 * bug #9309 [Routing] Fixed unresolved class (francoispluchino)
 * bug #9274 [Yaml] Fixed the escaping of strings starting with a dash when dumping (stof)
 * bug #9270 [Templating] Fix in ChainLoader.php (janschoenherr)
 * bug #9246 [Session] fixed wrong started state (tecbot)
 * bug #9234 [Debug] Fixed `ClassNotFoundFatalErrorHandler` (tPl0ch)
 * bug #9259 [Process] Fix latest merge from 2.2 in 2.3 (romainneutron)
 * bug #9237 [FrameworkBundle] assets:install command should mirror .dotfiles (.htaccess) (FineWolf)
 * bug #9223 [Translator] PoFileDumper - PO headers (Padam87)
 * bug #9257 [Process] Fix 9182 : random failure on pipes tests (romainneutron)
 * bug #9236 [Form] fix missing use statement for exception UnexpectedTypeException (jaugustin)
 * bug #9222 [Bridge] [Propel1]??Fixed guessed relations (ClementGautier)
 * bug #9214 [FramworkBundle] Check event listener services are not abstract (lyrixx)
 * bug #9207 [HttpKernel] Check for lock existence before unlinking (ollietb)
 * bug #9184 Fixed cache warmup of paths which contain back-slashes (fabpot)
 * bug #9192 [Form] remove MinCount and MaxCount constraints in ValidatorTypeGuesser (franek)

* 2.4.0-BETA1 (2013-10-07)

 * first beta release

