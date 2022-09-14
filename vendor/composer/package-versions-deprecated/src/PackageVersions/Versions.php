<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'laravel/laravel';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'aloha/twilio' => '4.0.4@d4174bbcb8caa41188088612f672677a0d3a3321',
  'anahkiasen/underscore-php' => '2.0.0@48f97b295c82d99c1fe10d8b0684c43f051b5580',
  'arcanedev/log-viewer' => '4.7.3@bb7bbce12d6220edff8bb4a2e45d1210cb4e08b6',
  'arcanedev/support' => '4.5.0@2bb6e901404a12caa440520676b6507569d20715',
  'automattic/woocommerce' => '3.1.0@d3b292f04c0b3b21dced691ebad8be073a83b4ad',
  'balping/json-raw-encoder' => 'v1.0.1@e2b0ab888342b0716f1f0628e2fa13b345c5f276',
  'barryvdh/laravel-dompdf' => 'v0.8.7@30310e0a675462bf2aa9d448c8dcbf57fbcc517d',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'composer/semver' => '1.7.2@647490bbcaf7fc4891c58f47b825eb99d19c377a',
  'consoletvs/charts' => '6.5.6@6914e85086749ac90832b0b14479642fe0337cf4',
  'defuse/php-encryption' => 'v2.3.1@77880488b9954b7884c25555c2a0ea9e7053f9d2',
  'dnoegel/php-xdg-base-dir' => 'v0.1.1@8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
  'doctrine/inflector' => '1.4.4@4bd5c1cdfcd00e9e2d8c484f79150f67e5d355d9',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'dompdf/dompdf' => 'v0.8.6@db91d81866c69a42dad1d2926f61515a1e3f42c5',
  'dragonmantank/cron-expression' => 'v2.3.1@65b2d8ee1f10915efb3b55597da3404f096acba2',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'erusev/parsedown' => '1.7.4@cb17b6477dfff935958ba01325f2e8a2bfa6dab3',
  'ezyang/htmlpurifier' => 'v4.14.0@12ab42bd6e742c70c0a52f7b82477fcd44e64b75',
  'fideloper/proxy' => '4.4.2@a751f2bc86dd8e6cfef12dc0cbdada82f5a18750',
  'firebase/php-jwt' => 'v5.5.1@83b609028194aa042ea33b5af2d41a7427de80e6',
  'giggsey/libphonenumber-for-php' => '8.12.54@d0bad134ca7206d36784c2c5ec531ba4513efde7',
  'giggsey/locale' => '2.2@9c1dca769253f6a3e81f9a5c167f53b6a54ab635',
  'graham-campbell/guzzle-factory' => 'v3.0.4@618cf7220b177c6d9939a36331df937739ffc596',
  'guzzlehttp/guzzle' => '6.5.8@a52f0440530b54fa079ce76e8c5d196a42cad981',
  'guzzlehttp/promises' => '1.5.1@fe752aedc9fd8fcca3fe7ad05d419d32998a06da',
  'guzzlehttp/psr7' => '1.9.0@e98e3e6d4f86621a9b75f623996e6bbdeb4b9318',
  'knox/pesapal' => '1.4.3@db78c66ddc21697f5a4942c5614489684b16bd73',
  'laravel/framework' => 'v5.8.38@78eb4dabcc03e189620c16f436358d41d31ae11f',
  'laravel/passport' => 'v7.5.1@d63cdd672c3d65b3c35b73d0ef13a9dbfcb71c08',
  'laravel/tinker' => 'v1.0.10@ad571aacbac1539c30d480908f9d0c9614eaf1a7',
  'laravelcollective/html' => 'v5.8.1@3a1c9974ea629eed96e101a24e3852ced382eb29',
  'lcobucci/jwt' => '3.4.6@3ef8657a78278dfeae7707d51747251db4176240',
  'league/event' => '2.2.0@d2cc124cf9a3fab2bb4ff963307f60361ce4d119',
  'league/flysystem' => '1.1.9@094defdb4a7001845300334e7c1ee2335925ef99',
  'league/mime-type-detection' => '1.11.0@ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
  'league/oauth2-server' => '7.4.0@2eb1cf79e59d807d89c256e7ac5e2bf8bdbd4acf',
  'maatwebsite/excel' => '3.1.40@8a54972e3d616c74687c3cbff15765555761885c',
  'maennchen/zipstream-php' => '2.1.0@c4c5803cc1f93df3d2448478ef79394a5981cc58',
  'markbaker/complex' => '3.0.1@ab8bc271e404909db09ff2d5ffa1e538085c0f22',
  'markbaker/matrix' => '3.0.0@c66aefcafb4f6c269510e9ac46b82619a904c576',
  'milon/barcode' => '6.0.5@06d4fc0cb50737942637b362ef0b61e20fd2d5bf',
  'monolog/monolog' => '1.27.1@904713c5929655dc9b97288b69cfeedad610c9a1',
  'mpdf/mpdf' => 'v8.1.2@a8a22f4874157e490d41b486053a20bec42e182c',
  'myclabs/deep-copy' => '1.11.0@14daed4296fae74d9e3201d2c4925d1acb7aa614',
  'myclabs/php-enum' => '1.8.4@a867478eae49c9f59ece437ae7f9506bfaa27483',
  'nesbot/carbon' => '2.61.0@bdf4f4fe3a3eac4de84dbec0738082a862c68ba6',
  'nexmo/laravel' => '2.4.1@029bdc19fc58cd6ef0aa75c7041d82b9d9dc61bd',
  'nikic/php-parser' => 'v4.14.0@34bea19b6e03d8153165d8f30bba4c3be86184c1',
  'nwidart/laravel-menus' => '4.0.0@e6a97cfa704bc9b93f4a06ad9184fa65fe6120fc',
  'nwidart/laravel-modules' => '5.1.0@d4edc3465d471644ca44b1b303803492609957cd',
  'opis/closure' => '3.6.3@3d81e4309d2a927abbe66df935f4bb60082805ad',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'paragonie/sodium_compat' => 'v1.17.1@ac994053faac18d386328c91c7900f930acadf1e',
  'patchwork/utf8' => 'v1.3.3@e1fa4d4a57896d074c9a8d01742b688d5db4e9d5',
  'phenx/php-font-lib' => '0.5.4@dd448ad1ce34c63d09baccd05415e361300c35b4',
  'phenx/php-svg-lib' => 'v0.3.3@5fa61b65e612ce1ae15f69b3d223cb14ecc60e32',
  'php-http/guzzle6-adapter' => 'v2.0.2@9d1a45eb1c59f12574552e81fb295e9e53430a56',
  'php-http/httplug' => '2.3.0@f640739f80dfa1152533976e3c112477f69274eb',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/promise' => '1.1.0@4c4c1f9b7289a2ec57cde7f1e9762a5789506f88',
  'php-parallel-lint/php-console-color' => 'v0.3@b6af326b2088f1ad3b264696c9fd590ec395b49e',
  'php-parallel-lint/php-console-highlighter' => 'v0.5@21bf002f077b177f056d8cb455c5ed573adfdbb8',
  'phpoffice/phpspreadsheet' => '1.24.1@69991111e05fca3ff7398e1e7fca9ebed33efec6',
  'phpoption/phpoption' => '1.9.0@dc5ff11e274a90cc1c743f66c9ad700ce50db9ab',
  'phpseclib/phpseclib' => '2.0.37@c812fbb4d6b4d7f30235ab7298a12f09ba13b37c',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.9.12@90da7f37568aee36b116a030c5f99c915267edd4',
  'pusher/pusher-php-server' => 'v4.1.5@251f22602320c1b1aff84798fe74f3f7ee0504a9',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/uuid' => '3.9.6@ffa80ab953edd85d5b6c004f96181a538aad35a3',
  'razorpay/razorpay' => 'v2.8.4@3f2edc150f6ca035d15ab81382f7f76417de91f6',
  'rmccue/requests' => 'v2.0.4@62bf29e0f1080b4f0f499d30adb6a382e70e9686',
  'sabberworm/php-css-parser' => '8.4.0@e41d2140031d533348b2192a83f02d8dd8a71d30',
  'setasign/fpdi' => 'v2.3.6@6231e315f73e4f62d72b73f3d6d78ff0eed93c31',
  'spatie/db-dumper' => '2.21.1@05e5955fb882008a8947c5a45146d86cfafa10d1',
  'spatie/dropbox-api' => '1.20.2@9a515343b248aacebff0febd1cd657fda4f9eb2b',
  'spatie/flysystem-dropbox' => '1.2.3@8b6b072f217343b875316ca6a4203dd59f04207a',
  'spatie/laravel-activitylog' => '3.9.1@659738573f8607191afbd2b794db8669a5b20951',
  'spatie/laravel-backup' => '5.12.1@553562557ef13fda0e823cc609cd7d4f2c4f2552',
  'spatie/laravel-permission' => '2.38.0@674ad54a0ba95d8ad26990aa250b5c9d9b165e15',
  'spatie/string' => '2.2.3@79ed501c8d624fb85bf71da4254e1878fb616c51',
  'spatie/temporary-directory' => '1.3.0@f517729b3793bca58f847c5fd383ec16f03ffec6',
  'srmklive/paypal' => '1.10.0@188bb21f06f58aa3ad3dd6a25e91a1fc34bff68c',
  'stripe/stripe-php' => 'v7.128.0@c704949c49b72985c76cc61063aa26fefbd2724e',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/console' => 'v4.4.44@c35fafd7f12ebd6f9e29c95a370df7f1fb171a40',
  'symfony/css-selector' => 'v5.4.11@c1681789f059ab756001052164726ae88512ae3d',
  'symfony/debug' => 'v4.4.44@1a692492190773c5310bc7877cb590c04c2f05be',
  'symfony/deprecation-contracts' => 'v2.5.2@e8b495ea28c1d97b5e0c121748d6f9b53d075c66',
  'symfony/error-handler' => 'v4.4.44@be731658121ef2d8be88f3a1ec938148a9237291',
  'symfony/event-dispatcher' => 'v4.4.44@1e866e9e5c1b22168e0ce5f0b467f19bba61266a',
  'symfony/event-dispatcher-contracts' => 'v1.1.13@1d5cd762abaa6b2a4169d3e77610193a7157129e',
  'symfony/finder' => 'v4.4.44@66bd787edb5e42ff59d3523f623895af05043e4f',
  'symfony/http-client-contracts' => 'v2.5.2@ba6a9f0e8f3edd190520ee3b9a958596b6ca2e70',
  'symfony/http-foundation' => 'v4.4.44@9bc83c2f78949fc64503134a3139a7b055890d06',
  'symfony/http-kernel' => 'v4.4.44@9e444442334fae9637ef3209bc2abddfef49e714',
  'symfony/mime' => 'v5.4.11@3cd175cdcdb6db2e589e837dd46aff41027d9830',
  'symfony/polyfill-ctype' => 'v1.26.0@6fd1b9a79f6e3cf65f9e679b23af304cd9e010d4',
  'symfony/polyfill-iconv' => 'v1.26.0@143f1881e655bebca1312722af8068de235ae5dc',
  'symfony/polyfill-intl-idn' => 'v1.26.0@59a8d271f00dd0e4c2e518104cc7963f655a1aa8',
  'symfony/polyfill-intl-normalizer' => 'v1.26.0@219aa369ceff116e673852dce47c3a41794c14bd',
  'symfony/polyfill-mbstring' => 'v1.26.0@9344f9cb97f3b19424af1a21a3b0e75b0a7d8d7e',
  'symfony/polyfill-php72' => 'v1.26.0@bf44a9fd41feaac72b074de600314a93e2ae78e2',
  'symfony/polyfill-php73' => 'v1.26.0@e440d35fa0286f77fb45b79a03fedbeda9307e85',
  'symfony/polyfill-php80' => 'v1.26.0@cfa0ae98841b9e461207c13ab093d76b0fa7bace',
  'symfony/process' => 'v4.4.44@5cee9cdc4f7805e2699d9fd66991a0e6df8252a2',
  'symfony/psr-http-message-bridge' => 'v1.3.0@9d3e80d54d9ae747ad573cad796e8e247df7b796',
  'symfony/routing' => 'v4.4.44@f7751fd8b60a07f3f349947a309b5bdfce22d6ae',
  'symfony/service-contracts' => 'v2.5.2@4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
  'symfony/translation' => 'v4.4.44@af947fefc306cec6ea5a1f6160c7e305a71f2493',
  'symfony/translation-contracts' => 'v2.5.2@136b19dd05cdf0709db6537d058bcab6dd6e2dbe',
  'symfony/var-dumper' => 'v4.4.44@f19951007dae942cc79b979c1fe26bfdfbeb54ed',
  'tijsverkoyen/css-to-inline-styles' => '2.2.4@da444caae6aca7a19c0c140f68c6182e337d5b1c',
  'twilio/sdk' => '5.41.1@b10341d50d647b1015dd264c530f3b8bca345b6c',
  'unicodeveloper/laravel-paystack' => '1.0.4@533d45b3e7c68e283a2ed71ddd45af1ef7728873',
  'vlucas/phpdotenv' => 'v3.6.10@5b547cdb25825f10251370f57ba5d9d924e6f68e',
  'vonage/client' => '2.3.0@e9c1492a9f1572124143e6fa963da417bb20d9ae',
  'vonage/client-core' => '2.1.0@ef7e8a0715c93c5ddc7915e8a29f29331798bb52',
  'yajra/laravel-datatables-oracle' => 'v9.21.2@a7fd01f06282923e9c63fa27fe6b391e21dc321a',
  'zendframework/zend-diactoros' => '2.2.1@de5847b068362a88684a55b0dbb40d85986cfa52',
  'barryvdh/laravel-debugbar' => 'v3.4.2@91ee8b3acf0d72a4937f4855bd245acbda9910ac',
  'beyondcode/laravel-dump-server' => '1.3.0@fcc88fa66895f8c1ff83f6145a5eff5fa2a0739a',
  'doctrine/instantiator' => '1.4.1@10dcfce151b967d20fde1b34ae6640712c3891bc',
  'filp/whoops' => '2.14.5@a63e5e8f26ebbebf8ed3c5c691637325512eb0dc',
  'fzaninotto/faker' => 'v1.9.2@848d8125239d7dbf8ab25cb7f054f1a630e68c2e',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'maximebf/debugbar' => 'v1.18.0@0d44b75f3b5d6d41ae83b79c7a4bceae7fbc78b6',
  'mnapoli/front-yaml' => '1.8.0@76baa8ca538e111bfe53ac49c6a512ec5ea2bf54',
  'mnapoli/silly' => '1.7.3@e437baa502c3e1691d342374e71446d4bac1cad5',
  'mockery/mockery' => '1.3.5@472fa8ca4e55483d55ee1e73c963718c4393791d',
  'mpociot/documentarian' => '0.4.0@c7dc266b6646a49f82b304a3451e41161cc4b1c3',
  'mpociot/laravel-apidoc-generator' => '4.8.2@9015d39020dc1d7e80b0cd012bc1e999fd2542ca',
  'mpociot/reflection-docblock' => '1.0.1@c8b2e2b1f5cebbb06e2b5ccbf2958f2198867587',
  'nunomaduro/collision' => 'v3.2.0@f7c45764dfe4ba5f2618d265a6f1f9c72732e01d',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'php-di/invoker' => '2.3.3@cd6d9f267d1a3474bdddf1be1da079f01b942786',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.6.1@77a32518733312af16a44300404e945338981de3',
  'phpspec/prophecy' => 'v1.15.0@bbcd7380b0ebf3961ee21409db7b38bc31d69a13',
  'phpunit/php-code-coverage' => '6.1.4@807e6013b00af69b6c5d9ceb4282d0393dbb9d8d',
  'phpunit/php-file-iterator' => '2.0.5@42c5ba5220e6904cbfe8b1a1bda7c0cfdc8c12f5',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.3@2454ae1765516d20c4ffe103d85a58a9a3bd5662',
  'phpunit/php-token-stream' => '3.1.3@9c1da83261628cb24b6a6df371b6e312b3954768',
  'phpunit/phpunit' => '7.5.20@9467db479d1b0487c99733bb1e7944d32deded2c',
  'sebastian/code-unit-reverse-lookup' => '1.0.2@1de8cd5c010cb153fcd68b8d0f64606f523f7619',
  'sebastian/comparator' => '3.0.3@1071dfcef776a57013124ff35e1fc41ccd294758',
  'sebastian/diff' => '3.0.3@14f72dd46eaf2f2293cbe79c93cc0bc43161a211',
  'sebastian/environment' => '4.2.4@d47bbbad83711771f167c72d4e3f25f7fcc1f8b0',
  'sebastian/exporter' => '3.1.4@0c32ea2e40dbf59de29f3b49bf375176ce7dd8db',
  'sebastian/global-state' => '2.0.0@e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
  'sebastian/object-enumerator' => '3.0.4@e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
  'sebastian/object-reflector' => '1.1.2@9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
  'sebastian/recursion-context' => '3.0.1@367dcba38d6e1977be014dc4b22f47a484dac7fb',
  'sebastian/resource-operations' => '2.0.2@31d35ca87926450c44eae7e2611d45a7a65ea8b3',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'symfony/var-exporter' => 'v5.4.10@8fc03ee75eeece3d9be1ef47d26d79bea1afb340',
  'symfony/yaml' => 'v5.3.14@c441e9d2e340642ac8b951b753dea962d55b669d',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'webmozart/assert' => '1.11.0@11cb2199493b2f8a3b53e7f19068fc6aac760991',
  'windwalker/renderer' => '3.5.23@b157f2832dac02209db032cb61e21b8264ee4499',
  'windwalker/structure' => '3.5.23@59466adb846685d60463f9c1403df2832d2fcf90',
  'laravel/laravel' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
