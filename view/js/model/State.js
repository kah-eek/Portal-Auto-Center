class State
{

	/**
	* Verify if exists the client in database
	* @param  callbackSuccess(data) Callback executed in success on get data 
	* @param  [callbackFail(error)] Callback executed in fail on get data 
	*/
	static getStates(callbackSuccess, callbackFail)
	{
		new StateDAO().getStates(callbackSuccess, callbackFail);
	}


}