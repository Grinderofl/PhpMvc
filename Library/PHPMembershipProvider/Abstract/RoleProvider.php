<?php

abstract class RoleProvider {

	private $_appName;
	private $_connection;
	
	abstract protected function Initialize($name, $config);
	abstract protected function IsUserInRole($username, $rolename);
	abstract protected function GetRolesForUser($username);
	abstract protected function CreateRole($rolename);
	abstract protected function DeleteRole($rolename, $throwOnPopulatedRole);
	abstract protected function RoleExists($rolename);
	abstract protected function AddUsersToRoles($usernames, $rolenames);
	abstract protected function RemoveUsersFromRoles($usernames, $rolenames);
	abstract protected function GetUsersInRole($rolename);
	abstract protected function GetAllRoles();
	abstract protected function FindUsersInRole($rolename, $usernameToMatch);
	

}