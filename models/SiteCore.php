<?php

namespace Model;

class SiteCore extends \Model\Noun
{
	public $id;
	public $name;
	public $domain;
	public $folder;
	public $active;
	
	public static function findByDomainAndTokens($strDomain, &$arrToken)
	{
		//	load site by domain and folder
		/*
		$objSite		= Site::QuerySingle(
							QQ::AndCondition(
								QQ::OrCondition(
									QQ::Equal(QQN::Site()->Domain, $strDomain),
									QQ::Equal(QQN::Site()->Domain, '*')
								),
								QQ::Equal(QQN::Site()->Folder, $arrToken[0])
							)
						);
		*/
		/*
		$robots = $this->modelsManager->createBuilder()
			    ->from('Site')
			    ->getQuery()
			    ->execute();

		debug($robots);exit;
		
		//	IF site found
		if($objSite)
		{
			//	DISCARD site token
			array_shift($arrToken);
		}
		else
		{
			//	LOAD default site
			$objSite	= self::LoadDefault();
		}
		
		return $objSite;
		*/
	}

	public static function findDefault()
	{
		// $objSite	= Site::QuerySingle(QQ::Equal(QQN::Site()->Default, '1'));
		
		// return $objSite;
	}

	public static function findByHandle($handle)
	{
		// $objSite	= Site::QuerySingle(QQ::Equal(QQN::Site()->Codename, $strCodename));
		
		// return $objSite;
	}
}