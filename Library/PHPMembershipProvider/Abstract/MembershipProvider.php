<?php

abstract class MembershipProvider {

	private $_enablePasswordRetrieval;
	private $_enablePasswordReset;
	private $_requiresQuestionAndAnswer;
	private $_requiresUniqueEmail;
	private $_passwordFormat;
	private $_maxInvalidPasswordAttempts;
	private $_passwordAttemptWindow;
	private $_minRequiredPasswordLength;
	private $_minRequiredNonAlphanumericCharacters;
	private $_passwordStrengthRegularExpression;
	
	
	public function EnablePasswordRetrieval() {
		return $this->_enablepasswordRetrieval;
	}
	
	public function EnablePasswordReset() {
		return $this->_enablePasswordReset;
	}
	
	public function RequiresQuestionAndAnswer() {
		return $this->_requiresQuestionAndAnswer;
	}
	
	public function RequiresUniqueEmail() {
		return $this->_requiresUniqueEmail;
	}
	
	public function PasswordFormat() {
		return $this->_passwordFormat;
	}
	
	public function MaxInvalidPasswordAttempts() {
		return $this->_maxInvalidPasswordAttempts;
	}
	
	public function PasswordAttemptWindow() {
		return $this->_passwordAttemptWindow;
	}
	
	public function MinRequiredPasswordLength() {
		return $this->_minRequiredPasswordLength();
	}
	
	public function MinRequiredNonAlphanumericCharacters() {
		return $this->_minRequiredNonAlphanumericCharacters;
	}
	
	public function PasswordStrengthRegularExpression() {
		return $this->_passwordStrengthRegularExpression;
	}
	
	abstract protected function Initialize($name, $config);
	abstract protected function CreateUser($name, $password, $email, $passwordQuestion, $passwordAnswer, $isApproved, $providerUserKey);
	abstract protected function ChangePasswordQuestionAndAnswer($username, $password, $newPasswordQuestion, $newPasswordAnswer);
	abstract protected function GetPassword($username, $password);
	abstract protected function ChangePassword($username, $oldPassword, $newPassword);
	abstract protected function ResetPassword($username, $passwordAnswer);
	abstract protected function UpdateUser($user);
	abstract protected function ValidateUser($username, $password);
	abstract protected function Unlockuser($username);
	abstract protected function GetUserById($providerUserKey, $userIsOnline);
	abstract protected function GetUserByUsername($username, $userIsOnline);
	abstract protected function GetUsernameByEmail($email);
	abstract protected function DeleteUser($username, $deleteAllRelatedDate);
	abstract protected function GetAllUsers($pageIndex, $pageSize);
	abstract protected function GetNumberOfUsersOnline();
	abstract protected function FindUsersByName($usernameToMatch, $pageIndex, $pageSize);
	abstract protected function FindUsersByEmail($emailToMatch, $pageIndex, $pageSize);
}