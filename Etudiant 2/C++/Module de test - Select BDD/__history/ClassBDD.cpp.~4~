//---------------------------------------------------------------------------

#pragma hdrstop

#include "ClassBDD.h"
#include <windows.h>
#include <stdlib.h>
#include <tchar.h>
#include <string.h>
#include <stdio.h>
//---------------------------------------------------------------------------
#pragma package(smart_init)

ClassBDD::ClassBDD()
{
  //constructeur
}
ClassBDD::~ClassBDD()
{
  //destructeur
}

int ClassBDD::connectBDD()
{
	connect = mysql_init(NULL);
	//std::stringstream stringbuilder;

	//Options de connexion
	mysql_options(connect, MYSQL_READ_DEFAULT_GROUP, "option");

	//Si la connexion réussie...
	if (mysql_real_connect(connect, "127.0.0.1", "root", "root", "moduleselect", 0, NULL, 0)) //("adresse de la BDD","identifiant BDD","mdp BDD","nom de la base",0,NULL,0)
	{
		/*Insertion des variables dans la BDD*/

		//stringbuilder << "INSERT INTO `Bateau` ( `Latitude`,`Longitude`) VALUES (" << latitude << ", " << longitude << ")";

		//mysql_query(connect, stringbuilder.str().c_str());
		return 1;
	}
	else
	{
		return 0;
	}
}

void ClassBDD::closeBDD()
{
	//Fermeture de MySQL
	mysql_close(connect);
}