<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'phario\\phive\\abstractversionconstrainttest' => '/unit/shared/versionconstraints/AbstractVersionConstraintTest.php',
                'phario\\phive\\anyversionconstrainttest' => '/unit/shared/versionconstraints/AnyVersionConstraintTest.php',
                'phario\\phive\\batpharactivatortest' => '/unit/shared/file/BatPharActivatorTest.php',
                'phario\\phive\\checksumservicetest' => '/unit/services/checksum/ChecksumServiceTest.php',
                'phario\\phive\\commandlocatortest' => '/unit/CommandLocatorTest.php',
                'phario\\phive\\composercommandconfigtest' => '/unit/commands/composer/ComposerCommandConfigTest.php',
                'phario\\phive\\composercommandtest' => '/unit/commands/composer/ComposerCommandTest.php',
                'phario\\phive\\composerservicetest' => '/unit/commands/composer/ComposerServiceTest.php',
                'phario\\phive\\configtest' => '/unit/shared/config/ConfigTest.php',
                'phario\\phive\\configuredphartest' => '/unit/shared/phar/ConfiguredPharTest.php',
                'phario\\phive\\consoleinputtest' => '/unit/shared/cli/ConsoleInputTest.php',
                'phario\\phive\\curlconfigtest' => '/unit/shared/http/CurlConfigTest.php',
                'phario\\phive\\directorytest' => '/unit/shared/file/DirectoryTest.php',
                'phario\\phive\\exactversionconstrainttest' => '/unit/shared/versionconstraints/ExactVersionConstraintTest.php',
                'phario\\phive\\factorytest' => '/unit/FactoryTest.php',
                'phario\\phive\\filedownloadertest' => '/unit/shared/download/FileDownloaderTest.php',
                'phario\\phive\\filenametest' => '/unit/shared/file/FilenameTest.php',
                'phario\\phive\\filetest' => '/unit/shared/file/FileTest.php',
                'phario\\phive\\gitawarephiveversiontest' => '/unit/shared/version/GitAwarePhiveVersionTest.php',
                'phario\\phive\\githubrepositorytest' => '/unit/shared/repository/GithubRepositoryTest.php',
                'phario\\phive\\gnupgkeydownloadertest' => '/unit/services/key/gpg/GnupgKeyDownloaderTest.php',
                'phario\\phive\\gnupgkeyimportertest' => '/unit/services/key/gpg/GnupgKeyImporterTest.php',
                'phario\\phive\\gnupgsignatureverifiertest' => '/unit/services/signature/gpg/GnupgSignatureVerifierTest.php',
                'phario\\phive\\gnupgtest' => '/unit/shared/GnuPGTest.php',
                'phario\\phive\\gnupgverificationresulttest' => '/unit/services/signature/gpg/GnupgVerificationResultTest.php',
                'phario\\phive\\greaterthanorequaltoversionconstrainttest' => '/unit/shared/versionconstraints/GreaterThanOrEqualToVersionConstraintTest.php',
                'phario\\phive\\helpcommandtest' => '/unit/commands/help/HelpCommandTest.php',
                'phario\\phive\\httpprogressupdatetest' => '/unit/shared/http/HttpProgressUpdateTest.php',
                'phario\\phive\\httpresponsetest' => '/unit/shared/http/HttpResponseTest.php',
                'phario\\phive\\installcommandconfigtest' => '/unit/commands/install/InstallCommandConfigTest.php',
                'phario\\phive\\installcommandtest' => '/unit/commands/install/InstallCommandTest.php',
                'phario\\phive\\integrationtests\\gnupgtest' => '/integration/shared/GnuPGTest.php',
                'phario\\phive\\integrationtests\\integrationtestcase' => '/integration/IntegrationTestCase.php',
                'phario\\phive\\integrationtests\\integrationtestfactory' => '/integration/IntegrationTestFactory.php',
                'phario\\phive\\keyimportresulttest' => '/unit/services/key/KeyImportResultTest.php',
                'phario\\phive\\keyservicetest' => '/unit/services/key/KeyServiceTest.php',
                'phario\\phive\\listcommandtest' => '/unit/commands/list/ListCommandTest.php',
                'phario\\phive\\localsslcertificatetest' => '/unit/shared/http/LocalSslCertificateTest.php',
                'phario\\phive\\optionstest' => '/unit/shared/cli/OptionsTest.php',
                'phario\\phive\\pharactivatorfactorytest' => '/unit/shared/file/PharActivatorFactoryTest.php',
                'phario\\phive\\pharactivatorlocatortest' => '/unit/shared/file/PharActivatorLocatorTest.php',
                'phario\\phive\\pharaliastest' => '/unit/shared/phar/PharAliasTest.php',
                'phario\\phive\\phardownloadertest' => '/unit/services/phar/PharDownloaderTest.php',
                'phario\\phive\\pharioaliasresolvertest' => '/unit/services/phar/PharIoAliasResolverTest.php',
                'phario\\phive\\phariorepositorytest' => '/unit/shared/repository/PharIoRepositoryTest.php',
                'phario\\phive\\pharregistrytest' => '/unit/shared/PharRegistryTest.php',
                'phario\\phive\\pharservicetest' => '/unit/services/phar/PharServiceTest.php',
                'phario\\phive\\phartest' => '/unit/shared/phar/PharTest.php',
                'phario\\phive\\phivexmlconfigtest' => '/unit/shared/config/PhiveXmlConfigTest.php',
                'phario\\phive\\purgecommandtest' => '/unit/commands/purge/PurgeCommandTest.php',
                'phario\\phive\\regressiontestbootstrap' => '/regression/RegressionTestBootstrap.php',
                'phario\\phive\\regressiontests\\installcommandtest' => '/regression/InstallCommandTest.php',
                'phario\\phive\\regressiontests\\regressiontestcase' => '/regression/RegressionTestCase.php',
                'phario\\phive\\regressiontests\\removecommandtest' => '/regression/RemoveCommandTest.php',
                'phario\\phive\\regressiontests\\updatecommandtest' => '/regression/UpdateCommandTest.php',
                'phario\\phive\\regressiontests\\versioncommandtest' => '/regression/VersionCommandTest.php',
                'phario\\phive\\releasecollectiontest' => '/unit/shared/phar/ReleaseCollectionTest.php',
                'phario\\phive\\releasetest' => '/unit/shared/phar/ReleaseTest.php',
                'phario\\phive\\removecommandconfigtest' => '/unit/commands/remove/RemoveCommandConfigTest.php',
                'phario\\phive\\resetcommandconfigtest' => '/unit/commands/reset/ResetCommandConfigTest.php',
                'phario\\phive\\resetcommandtest' => '/unit/commands/reset/ResetCommandTest.php',
                'phario\\phive\\scalartestdataprovider' => '/unit/ScalarTestDataProvider.php',
                'phario\\phive\\sha1hashtest' => '/unit/shared/hash/sha/Sha1HashTest.php',
                'phario\\phive\\sha256hashtest' => '/unit/shared/hash/sha/Sha256HashTest.php',
                'phario\\phive\\skelcommandconfigtest' => '/unit/commands/skel/SkelCommandConfigTest.php',
                'phario\\phive\\sourceslisttest' => '/unit/shared/SourcesListTest.php',
                'phario\\phive\\specificmajorandminorversionconstrainttest' => '/unit/shared/versionconstraints/SpecificMajorAndMinorVersionConstraintTest.php',
                'phario\\phive\\specificmajorversionconstrainttest' => '/unit/shared/versionconstraints/SpecificMajorVersionConstraintTest.php',
                'phario\\phive\\staticphiveversiontest' => '/unit/shared/version/StaticPhiveVersionTest.php',
                'phario\\phive\\targetdirectorylocatortest' => '/unit/commands/TargetDirectoryLocatorTest.php',
                'phario\\phive\\teststreamwrapper' => '/unit/TestStreamWrapper.php',
                'phario\\phive\\unixoidenvironmenttest' => '/unit/shared/environment/UnixoidEnvironmentTest.php',
                'phario\\phive\\unsupportedhashstub' => '/unit/services/checksum/stubs/UnsupportedHashStub.php',
                'phario\\phive\\updatecommandconfigtest' => '/unit/commands/update/UpdateCommandConfigTest.php',
                'phario\\phive\\updatecommandtest' => '/unit/commands/update/UpdateCommandTest.php',
                'phario\\phive\\urltest' => '/unit/shared/UrlTest.php',
                'phario\\phive\\versionconstraintgrouptest' => '/unit/shared/versionconstraints/VersionConstraintGroupTest.php',
                'phario\\phive\\versionconstraintparsertest' => '/unit/shared/versionconstraints/VersionConstraintParserTest.php',
                'phario\\phive\\versiontest' => '/unit/shared/version/VersionTest.php',
                'phario\\phive\\windowsenvironmenttest' => '/unit/shared/environment/WindowsEnvironmentTest.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    true
);
// @codeCoverageIgnoreEnd
