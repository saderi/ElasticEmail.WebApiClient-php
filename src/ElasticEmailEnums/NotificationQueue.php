<?php
	namespace ElasticEmailEnums; 

class NotificationQueue
{
    /**
     * Creation date.
     */
    public /*string*/ $DateCreated;

    /**
     * Date of last status change.
     */
    public /*string*/ $StatusChangeDate;

    /**
     * Actual status.
     */
    public /*string*/ $NewStatus;

    /**
     * 
     */
    public /*string*/ $Reference;

    /**
     * Error message.
     */
    public /*string*/ $ErrorMessage;

    /**
     * Number of previous delivery attempts
     */
    public /*string*/ $RetryCount;

}
