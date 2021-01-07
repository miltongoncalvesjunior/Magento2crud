# Magento2crud

Module Created based on the article:

STEP 1#
Clone repo your_dir_magento/app/code/
  php bin/magento setup:upgrade

STEP 2# 
verifique se o modulo está enable
verifique se existe a tabela shark_helloworld em seu banco de dados  

STEP 3#
Acesse seu mysql e Coloque dados na tabela shark_helloworld
php bin/magento setup:upgrade
php bin/magento setup:di:compile

STEP 4#
acesse www.your_domain_url/helloworld/indexer/indexer

