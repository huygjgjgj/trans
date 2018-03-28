<?php

return [
	
	/*
	|--------------------------------------------------------------------------
	| Emails Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines are used by the Mail notifications.
	|
	*/
	
	// mail_footer
	'mail_footer_content'             => ':appName, Cổng thông tin việc làm. Đơn giản, nhanh chóng và hiệu quả.',
	
	
	// email_verification
	'email_verification_title'        => 'Vui lòng xác nhận địa chỉ email.',
	'email_verification_action'       => 'Xác nhận địa chỉ email',
	'email_verification_content_1'    => 'Xin chào :userName !',
	'email_verification_content_2'    => 'Nhấp vào nút bên dưới để xác minh địa chỉ email của bạn.',
	'email_verification_content_3'    => 'Nút không hoạt động? Dán liên kết sau vào trình duyệt của bạn:<br><a href=":verificationLink">:verificationLink</a>.',
	'email_verification_content_4'    => '<br><br>Bạn nhận được email này vì gần đây bạn đã tạo một :appName  tài khoản hoặc thêm một địa chỉ email mới. Nếu đây không phải là bạn, vui lòng bỏ qua email này.',
	'email_verification_content_5'    => '<br><br>Trân trọng,<br>The :appName Team',
	
	
	// post_activated (new)
	'post_activated_title'              => 'Tài khoản của bạn đã được kích hoạt',
	'post_activated_content_1'          => 'Xin chào, <br><br>Chiến dịch của bạn <a href=":postUrl">:title</a> đã được kích hoạt.',
	'post_activated_content_2'          => '<br>Nó sẽ sớm được kiểm tra bởi một trong những quản trị viên của chúng tôi để công bố trên đường truyền.',
	'post_activated_content_3'          => '<br><br>Bạn nhận được email này bởi vì gần đây bạn đã tạo một chiến dịch mới trên :appName. Nếu đây không phải là bạn, vui lòng bỏ qua email này.',
	'post_activated_content_4'          => '<br><br>Trân trọng,<br>The :appName Team',
	
	// post_reviewed (new)
	'post_reviewed_title'               => 'Tài khoản của bạn hiện đang trực tuyến',
	'post_reviewed_content_1'           => 'Xin chào, <br><br>Tài khoản <a href=":postUrl">:title</a> hiện đang trực tuyến.',
	'post_reviewed_content_2'           => '<br><br>Bạn nhận được email này bởi vì gần đây bạn đã tạo một tài khoản mới trên :appName. Nếu đây không phải là bạn, vui lòng bỏ qua email này.',
	'post_reviewed_content_3'           => '<br><br>Trân trọng,<br>The :appName Team',
	
	
	// post_deleted
	'post_deleted_title'                => 'Tài khoản của bạn đã bị xóa',
	'post_deleted_content_1'            => 'Xin chào,<br><br>Tài khoản ":title" của bạn  đã bị xóa khỏi<a href=":appUrl">:appName</a> at :now.',
	'post_deleted_content_2'            => '<br><br>Cảm ơn sự tín nhiệm của bạn và sớm gặp lại,',
	'post_deleted_content_3'            => '<br><br>The :appName Team',
	'post_deleted_content_4'            => '<br><br><br>PS: Đây là email tự động, vui lòng không trả lời.',
	
	
	// post_employer_contacted
	'post_employer_contacted_title'     => 'Tài khoản ":title" của bạn trên :appName',
	'post_employer_contacted_content_1' => '<strong>Thông tin liên lạc :</strong><br>Tên : :name<br> Địa chỉ Email : :email<br>Số điện thoại : :phone<br><br>Email về tài khoản này đã được gửi cho bạn ":title" bạn nộp đơn vào <a href=":appUrl">:domain</a> : <a href=":postUrl">:postUrl</a>',
	'post_employer_contacted_content_2' => '<br><br>PS : Bạn chưa trả lời Email',
	'post_employer_contacted_content_3' => '',
	'post_employer_contacted_content_4' => '<br><br>Cảm ơn sự tín nhiệm của bạn và sớm gặp lại,',
	'post_employer_contacted_content_5' => '<br><br>The :appName Team',
	'post_employer_contacted_content_6' => '<br><br><br>PS:Đây là email tự động, vui lòng không trả lời.',
	
	
	// user_deleted
	'user_deleted_title'              => 'Tài khoản của bạn đã bị xóa trong :appName',
	'user_deleted_content_1'          => 'Xin chào,<br><br>Tài khoản của bạn đã bị xóa khỏi <a href=":appUrl">:appName</a> lúc :now.',
	'user_deleted_content_2'          => '<br><br>Cảm ơn sự tin tưởng của bạn và sớm gặp lại bạn,',
	'user_deleted_content_3'          => '<br><br>The :appName Team',
	'user_deleted_content_4'          => '<br><br><br>PS: Đây là email tự động, vui lòng không trả lời.',
	
	
	// user_activated (new)
	'user_activated_title'            => 'Chào mừng đến với :appName !',
	'user_activated_content_1'        => 'Chào mừng đến với :appName :userName !',
	'user_activated_content_2'        => '<br>Tài khoản của bạn đã được kích hoạt.',
	'user_activated_content_3'        => '<br><br><strong>Chú thích : :appName khuyến cáo bạn rằng :</strong><br><br>1 - Không bao giờ gửi tiền bằng Western Union hoặc các uỷ nhiệm quốc tế khác.<br>2 - Nếu bạn có bất kỳ nghi ngờ về mức độ nghiêm trọng của nhà quảng cáo, vui lòng liên hệ ngay với chúng tôi. Sau đó chúng ta có thể vô hiệu hóa càng nhanh càng tốt và ngăn chặn người khác thiếu thông tin trở thành nạn nhân.',
	'user_activated_content_4'        => '<br><br>Bạn nhận được email này bởi vì gần đây bạn đã tạo một tài khoản mới :appName. Nếu đây không phải là bạn, vui lòng bỏ qua email này.',
	'user_activated_content_5'        => '<br><br>Trân trọng,<br>The :appName Team',
	
	
	// reset_password
	'reset_password_title'            => 'Đặt lại mật khẩu của bạn',
	'reset_password_action'           => 'Đặt lại mật khẩu',
	'reset_password_content_1'        => 'Quên mật khẩu?',
	'reset_password_content_2'        => 'Trả lại mật khẩu mới cho bạn',
	'reset_password_content_3'        => 'Nếu bạn không yêu cầu đặt lại mật khẩu, bạn không cần thực hiện thêm hành động nào nữa.',
	'reset_password_content_4'        => '<br><br>Regards,<br>:appName',
	'reset_password_content_5'        => '<br><br>---<br>Nếu bạn gặp sự cố khi nhấp vào nút "Đặt lại mật khẩu", hãy sao chép và dán URL dưới đây vào trình duyệt web của bạn:<br> :link',
	
	
	// contact_form
	'contact_form_title'              => 'Tin nhắn mới từ :appName',
	'contact_form_content'            => ':appName - Tin nhắn mới',
	
	
	// post_report_sent
	'post_report_sent_title'            => 'Báo cáo lạm dụng mới',
	'post_report_sent_content'          => 'Báo cáo lạm dụng mới - :appName/:countryCode',
	'Post URL'                          => 'Post URL',
	
	
	// ad archived
	'post_archived_title'               => 'Tài khoản của bạn đã được lưu trữ',
	'post_archived_content_1'           => 'Xin chào,<br><br>Tài khoản ":title" của bạn đã được lưu trữ từ :appName lúc :now.',
	'post_archived_content_2'           => '<br><br>Bạn có thể repost nó bằng cách nhấn vào đây : :repostLink',
	'post_archived_content_3'           => '<br><br>Nếu bạn không làm gì thì tài khoản của bạn sẽ bị xóa vĩnh viễn :dateDel.',
	'post_archived_content_4'           => '<br><br>Cảm ơn sự tín nhiệm của bạn và sớm gặp lại,',
	'post_archived_content_5'           => '<br><br>The :appName Team',
	'post_archived_content_6'           => '<br><br><br>PS: Đây là email tự động, vui lòng không trả lời.',
	
	
	// post_will_be_deleted
	'post_will_be_deleted_title'        => 'Tài khoản của bạn sẽ bị xóa trong :days ngày',
	'post_will_be_deleted_content_1'    => 'Xin chào,<br><br>Tài khoản ":title" của bạn sẽ bị xóa trong :days ngày từ :appName.',
	'post_will_be_deleted_content_2'    => '<br><br>Bạn có thể repost nó bằng cách nhấn vào đây : :repostLink',
	'post_will_be_deleted_content_3'    => '<br><br>Nếu bạn không làm gì thì tài khoản của bạn sẽ bị xóa vĩnh viễn :dateDel.',
	'post_will_be_deleted_content_4'    => '<br><br>Thank you for your trust and see you soon,',
	'post_will_be_deleted_content_5'    => '<br><br>The :appName Team',
	'post_will_be_deleted_content_6'    => '<br><br><br>PS: Đây là email tự động, vui lòng không trả lời.',
	
	
	// post_sent_by_email
	'post_sent_by_email_title'          => 'Đề xuất mới - :appName/:countryCode',
	'post_sent_by_email_content_1'      => 'Một người dùng đề nghị bạn một liên kết về việc làm với địa chỉ email: :senderEmail',
	'post_sent_by_email_content_2'      => '<br>Nhấp vào bên dưới để xem chi tiết về đề nghị tuyển dụng.',
	'Job URL'                           => 'URL việc làm',
	
	
	// post_notification
	'post_notification_title'           => 'Việc làm mới đã được đăng',
	'post_notification_content_1'       => 'Xin chào quản trị,<br><br>Người dùng :advertiserName vừa mới đăng một việc làm mới.',
	'post_notification_content_2'       => '<br>Tiêu đề bài viết : :title<br>Đăng trên : :now lúc :time',
	'post_notification_content_3'       => '<br><br>Trân trọng,<br>The :appName Team',
	
	
	// user_notification
	'user_notification_title'         => 'Đăng ký thành viên mới',
	'user_notification_content_1'     => 'Xin chào quản trị,<br><br>:name vừa đăng ký.',
	'user_notification_content_2'     => '<br>Đăng ký trên : :now lúc :time<br>Email: <a href="mailto::email">:email</a>',
	'user_notification_content_3'     => '<br><br>Trân trọng,<br>The :appName Team',
	
	
	// payment_sent
	'payment_sent_title'              => 'Cảm ơn bạn đã thanh toán!',
	'payment_sent_content_1'          => 'Xin chào,<br><br>Chúng tôi đã nhận được thanh toán của bạn cho quảng cáo việc làm ":title".',
	'payment_sent_content_2'          => '<br><h1>Cám ơn bạn !</h1>',
	'payment_sent_content_3'          => '<br>Trân trọng,<br>The :appName Team',
	
	
	// payment_notification
	'payment_notification_title'      => 'Thanh toán mới đã được gửi',
	'payment_notification_content_1'  => 'Xin chào quản trị viên,<br><br>Người dùng :advertiserName vừa mới thanh toán một gói quảng cáo việc làm ":title".',
	'payment_notification_content_2'  => '<br><br><strong>CHI TIẾT THANH TOÁN</strong><br><strong>Lý do thanh toán:</strong> Quảng cáo #:adId - :packageName<br><strong>Số tiền:</strong> :amount :currency<br><strong>Phương thức thanh toán:</strong> :paymentMethodName',
	'payment_notification_content_3'  => '<br><br>Trân trọng,<br>The :appName Team',
	
	
	// reply_form
	'reply_form_title'                => ':subject',
	'reply_form_content_1'            => 'Xin chào,<br><br><strong>Bạn đã nhận được phản hồi từ: :senderName. Xem thông báo dưới đây:</strong><br><br>',
	'reply_form_content_2'            => '<br><br>Trân trọng,<br>The :appName Team',


];
