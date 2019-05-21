<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\ExpenseReport;
use phpDocumentor\Reflection\Types\This;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    private $_expenseReport;

    /**
     * Create a new message instance.
     * @param ExpenseReport $expenseReport
     * @return void
     */
    public function __construct(ExpenseReport $expenseReport)
    {
        $this->_expenseReport = $expenseReport;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.expenseReport', [
            'report' => $this->_expenseReport
        ]);
    }
}
