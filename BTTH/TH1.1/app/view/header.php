<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?= time(); ?>">
    <script id="wpcp_disable_selection" type="text/javascript"
        src="data:text/javascript;base64,dmFyIGltYWdlX3NhdmVfbXNnPSdZb3UgYXJlIG5vdCBhbGxvd2VkIHRvIHNhdmUgaW1hZ2VzISc7dmFyIG5vX21lbnVfbXNnPSdDb250ZXh0IE1lbnUgZGlzYWJsZWQhJzt2YXIgc21lc3NhZ2U9IkNvbnRlbnQgaXMgcHJvdGVjdGVkICEhIjtmdW5jdGlvbiBkaXNhYmxlRW50ZXJLZXkoZSl7dmFyIGVsZW10eXBlPWUudGFyZ2V0LnRhZ05hbWU7ZWxlbXR5cGU9ZWxlbXR5cGUudG9VcHBlckNhc2UoKTtpZihlbGVtdHlwZT09IlRFWFQifHxlbGVtdHlwZT09IlRFWFRBUkVBInx8ZWxlbXR5cGU9PSJJTlBVVCJ8fGVsZW10eXBlPT0iUEFTU1dPUkQifHxlbGVtdHlwZT09IlNFTEVDVCJ8fGVsZW10eXBlPT0iT1BUSU9OInx8ZWxlbXR5cGU9PSJFTUJFRCIpe2VsZW10eXBlPSdURVhUJ30KaWYoZS5jdHJsS2V5KXt2YXIga2V5O2lmKHdpbmRvdy5ldmVudCkKa2V5PXdpbmRvdy5ldmVudC5rZXlDb2RlO2Vsc2Uga2V5PWUud2hpY2g7aWYoZWxlbXR5cGUhPSdURVhUJyYmKGtleT09OTd8fGtleT09NjV8fGtleT09Njd8fGtleT09OTl8fGtleT09ODh8fGtleT09MTIwfHxrZXk9PTI2fHxrZXk9PTg1fHxrZXk9PTg2fHxrZXk9PTgzfHxrZXk9PTQzfHxrZXk9PTczKSl7aWYod2NjcF9mcmVlX2lzY29udGVudGVkaXRhYmxlKGUpKXJldHVybiEwO3Nob3dfd3BjcF9tZXNzYWdlKCdZb3UgYXJlIG5vdCBhbGxvd2VkIHRvIGNvcHkgY29udGVudCBvciB2aWV3IHNvdXJjZScpO3JldHVybiExfWVsc2UgcmV0dXJuITB9fQpmdW5jdGlvbiB3Y2NwX2ZyZWVfaXNjb250ZW50ZWRpdGFibGUoZSl7dmFyIGU9ZXx8d2luZG93LmV2ZW50O3ZhciB0YXJnZXQ9ZS50YXJnZXR8fGUuc3JjRWxlbWVudDt2YXIgZWxlbXR5cGU9ZS50YXJnZXQubm9kZU5hbWU7ZWxlbXR5cGU9ZWxlbXR5cGUudG9VcHBlckNhc2UoKTt2YXIgaXNjb250ZW50ZWRpdGFibGU9ImZhbHNlIjtpZih0eXBlb2YgdGFyZ2V0LmdldEF0dHJpYnV0ZSE9InVuZGVmaW5lZCIpaXNjb250ZW50ZWRpdGFibGU9dGFyZ2V0LmdldEF0dHJpYnV0ZSgiY29udGVudGVkaXRhYmxlIik7dmFyIGlzY29udGVudGVkaXRhYmxlMj0hMTtpZih0eXBlb2YgdGFyZ2V0LmlzQ29udGVudEVkaXRhYmxlIT0idW5kZWZpbmVkIilpc2NvbnRlbnRlZGl0YWJsZTI9dGFyZ2V0LmlzQ29udGVudEVkaXRhYmxlO2lmKHRhcmdldC5wYXJlbnRFbGVtZW50LmlzQ29udGVudEVkaXRhYmxlKWlzY29udGVudGVkaXRhYmxlMj0hMDtpZihpc2NvbnRlbnRlZGl0YWJsZT09InRydWUifHxpc2NvbnRlbnRlZGl0YWJsZTI9PSEwKXtpZih0eXBlb2YgdGFyZ2V0LnN0eWxlIT0idW5kZWZpbmVkIil0YXJnZXQuc3R5bGUuY3Vyc29yPSJ0ZXh0IjtyZXR1cm4hMH19CmZ1bmN0aW9uIGRpc2FibGVfY29weShlKXt2YXIgZT1lfHx3aW5kb3cuZXZlbnQ7dmFyIGVsZW10eXBlPWUudGFyZ2V0LnRhZ05hbWU7ZWxlbXR5cGU9ZWxlbXR5cGUudG9VcHBlckNhc2UoKTtpZihlbGVtdHlwZT09IlRFWFQifHxlbGVtdHlwZT09IlRFWFRBUkVBInx8ZWxlbXR5cGU9PSJJTlBVVCJ8fGVsZW10eXBlPT0iUEFTU1dPUkQifHxlbGVtdHlwZT09IlNFTEVDVCJ8fGVsZW10eXBlPT0iT1BUSU9OInx8ZWxlbXR5cGU9PSJFTUJFRCIpe2VsZW10eXBlPSdURVhUJ30KaWYod2NjcF9mcmVlX2lzY29udGVudGVkaXRhYmxlKGUpKXJldHVybiEwO3ZhciBpc1NhZmFyaT0vU2FmYXJpLy50ZXN0KG5hdmlnYXRvci51c2VyQWdlbnQpJiYvQXBwbGUgQ29tcHV0ZXIvLnRlc3QobmF2aWdhdG9yLnZlbmRvcik7dmFyIGNoZWNrZXJfSU1HPScnO2lmKGVsZW10eXBlPT0iSU1HIiYmY2hlY2tlcl9JTUc9PSdjaGVja2VkJyYmZS5kZXRhaWw+PTIpe3Nob3dfd3BjcF9tZXNzYWdlKGFsZXJ0TXNnX0lNRyk7cmV0dXJuITF9CmlmKGVsZW10eXBlIT0iVEVYVCIpe2lmKHNtZXNzYWdlIT09IiImJmUuZGV0YWlsPT0yKQpzaG93X3dwY3BfbWVzc2FnZShzbWVzc2FnZSk7aWYoaXNTYWZhcmkpCnJldHVybiEwO2Vsc2UgcmV0dXJuITF9fQpmdW5jdGlvbiBkaXNhYmxlX2NvcHlfaWUoKXt2YXIgZT1lfHx3aW5kb3cuZXZlbnQ7dmFyIGVsZW10eXBlPXdpbmRvdy5ldmVudC5zcmNFbGVtZW50Lm5vZGVOYW1lO2VsZW10eXBlPWVsZW10eXBlLnRvVXBwZXJDYXNlKCk7aWYod2NjcF9mcmVlX2lzY29udGVudGVkaXRhYmxlKGUpKXJldHVybiEwO2lmKGVsZW10eXBlPT0iSU1HIil7c2hvd193cGNwX21lc3NhZ2UoYWxlcnRNc2dfSU1HKTtyZXR1cm4hMX0KaWYoZWxlbXR5cGUhPSJURVhUIiYmZWxlbXR5cGUhPSJURVhUQVJFQSImJmVsZW10eXBlIT0iSU5QVVQiJiZlbGVtdHlwZSE9IlBBU1NXT1JEIiYmZWxlbXR5cGUhPSJTRUxFQ1QiJiZlbGVtdHlwZSE9Ik9QVElPTiImJmVsZW10eXBlIT0iRU1CRUQiKXtyZXR1cm4hMX19CmZ1bmN0aW9uIHJlRW5hYmxlKCl7cmV0dXJuITB9CmRvY3VtZW50Lm9ua2V5ZG93bj1kaXNhYmxlRW50ZXJLZXk7ZG9jdW1lbnQub25zZWxlY3RzdGFydD1kaXNhYmxlX2NvcHlfaWU7aWYobmF2aWdhdG9yLnVzZXJBZ2VudC5pbmRleE9mKCdNU0lFJyk9PS0xKXtkb2N1bWVudC5vbm1vdXNlZG93bj1kaXNhYmxlX2NvcHk7ZG9jdW1lbnQub25jbGljaz1yZUVuYWJsZX0KZnVuY3Rpb24gZGlzYWJsZVNlbGVjdGlvbih0YXJnZXQpe2lmKHR5cGVvZiB0YXJnZXQub25zZWxlY3RzdGFydCE9InVuZGVmaW5lZCIpCnRhcmdldC5vbnNlbGVjdHN0YXJ0PWRpc2FibGVfY29weV9pZTtlbHNlIGlmKHR5cGVvZiB0YXJnZXQuc3R5bGUuTW96VXNlclNlbGVjdCE9InVuZGVmaW5lZCIpe3RhcmdldC5zdHlsZS5Nb3pVc2VyU2VsZWN0PSJub25lIn1lbHNlIHRhcmdldC5vbm1vdXNlZG93bj1mdW5jdGlvbigpe3JldHVybiExfQp0YXJnZXQuc3R5bGUuY3Vyc29yPSJkZWZhdWx0In0Kd2luZG93Lm9ubG9hZD1mdW5jdGlvbigpe2Rpc2FibGVTZWxlY3Rpb24oZG9jdW1lbnQuYm9keSl9O3ZhciBvbmxvbmd0b3VjaDt2YXIgdGltZXI7dmFyIHRvdWNoZHVyYXRpb249MTAwMDt2YXIgZWxlbXR5cGU9IiI7ZnVuY3Rpb24gdG91Y2hzdGFydChlKXt2YXIgZT1lfHx3aW5kb3cuZXZlbnQ7dmFyIHRhcmdldD1lLnRhcmdldHx8ZS5zcmNFbGVtZW50O2VsZW10eXBlPXdpbmRvdy5ldmVudC5zcmNFbGVtZW50Lm5vZGVOYW1lO2VsZW10eXBlPWVsZW10eXBlLnRvVXBwZXJDYXNlKCk7aWYoIXdjY3BfcHJvX2lzX3Bhc3NpdmUoKSllLnByZXZlbnREZWZhdWx0KCk7aWYoIXRpbWVyKXt0aW1lcj1zZXRUaW1lb3V0KG9ubG9uZ3RvdWNoLHRvdWNoZHVyYXRpb24pfX0KZnVuY3Rpb24gdG91Y2hlbmQoKXtpZih0aW1lcil7Y2xlYXJUaW1lb3V0KHRpbWVyKTt0aW1lcj1udWxsfQpvbmxvbmd0b3VjaCgpfQpvbmxvbmd0b3VjaD1mdW5jdGlvbihlKXtpZihlbGVtdHlwZSE9IlRFWFQiJiZlbGVtdHlwZSE9IlRFWFRBUkVBIiYmZWxlbXR5cGUhPSJJTlBVVCImJmVsZW10eXBlIT0iUEFTU1dPUkQiJiZlbGVtdHlwZSE9IlNFTEVDVCImJmVsZW10eXBlIT0iRU1CRUQiJiZlbGVtdHlwZSE9Ik9QVElPTiIpe2lmKHdpbmRvdy5nZXRTZWxlY3Rpb24pe2lmKHdpbmRvdy5nZXRTZWxlY3Rpb24oKS5lbXB0eSl7d2luZG93LmdldFNlbGVjdGlvbigpLmVtcHR5KCl9ZWxzZSBpZih3aW5kb3cuZ2V0U2VsZWN0aW9uKCkucmVtb3ZlQWxsUmFuZ2VzKXt3aW5kb3cuZ2V0U2VsZWN0aW9uKCkucmVtb3ZlQWxsUmFuZ2VzKCl9fWVsc2UgaWYoZG9jdW1lbnQuc2VsZWN0aW9uKXtkb2N1bWVudC5zZWxlY3Rpb24uZW1wdHkoKX0KcmV0dXJuITF9fTtkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCJET01Db250ZW50TG9hZGVkIixmdW5jdGlvbihldmVudCl7d2luZG93LmFkZEV2ZW50TGlzdGVuZXIoInRvdWNoc3RhcnQiLHRvdWNoc3RhcnQsITEpO3dpbmRvdy5hZGRFdmVudExpc3RlbmVyKCJ0b3VjaGVuZCIsdG91Y2hlbmQsITEpfSk7ZnVuY3Rpb24gd2NjcF9wcm9faXNfcGFzc2l2ZSgpe3ZhciBjb2xkPSExLGhpa2U9ZnVuY3Rpb24oKXt9O3RyeXtjb25zdCBvYmplY3QxPXt9O3ZhciBhaWQ9T2JqZWN0LmRlZmluZVByb3BlcnR5KG9iamVjdDEsJ3Bhc3NpdmUnLHtnZXQoKXtjb2xkPSEwfX0pO3dpbmRvdy5hZGRFdmVudExpc3RlbmVyKCd0ZXN0JyxoaWtlLGFpZCk7d2luZG93LnJlbW92ZUV2ZW50TGlzdGVuZXIoJ3Rlc3QnLGhpa2UsYWlkKX1jYXRjaChlKXt9CnJldHVybiBjb2xkfQ=="
        defer></script>
    <script id="wpcp_disable_Right_Click" type="text/javascript"
        src="data:text/javascript;base64,ZG9jdW1lbnQub25kcmFnc3RhcnQ9ZnVuY3Rpb24oKXtyZXR1cm4hMX0KZnVuY3Rpb24gbm9jb250ZXh0KGUpe3JldHVybiExfQpkb2N1bWVudC5vbmNvbnRleHRtZW51PW5vY29udGV4dA=="
        defer></script>
    <script
        src="data:text/javascript;base64,dmFyIHRpbWVvdXRfcmVzdWx0O2Z1bmN0aW9uIHNob3dfd3BjcF9tZXNzYWdlKHNtZXNzYWdlKXtpZihzbWVzc2FnZSE9PSIiKXt2YXIgc21lc3NhZ2VfdGV4dD0nPHNwYW4+QWxlcnQ6IDwvc3Bhbj4nK3NtZXNzYWdlO2RvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJ3cGNwLWVycm9yLW1lc3NhZ2UiKS5pbm5lckhUTUw9c21lc3NhZ2VfdGV4dDtkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgid3BjcC1lcnJvci1tZXNzYWdlIikuY2xhc3NOYW1lPSJtc2dtc2ctYm94LXdwY3Agd2FybmluZy13cGNwIHNob3dtZSI7Y2xlYXJUaW1lb3V0KHRpbWVvdXRfcmVzdWx0KTt0aW1lb3V0X3Jlc3VsdD1zZXRUaW1lb3V0KGhpZGVfbWVzc2FnZSwzMDAwKX19CmZ1bmN0aW9uIGhpZGVfbWVzc2FnZSgpe2RvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJ3cGNwLWVycm9yLW1lc3NhZ2UiKS5jbGFzc05hbWU9Im1zZ21zZy1ib3gtd3BjcCB3YXJuaW5nLXdwY3AgaGlkZW1lIn0="
        defer></script>

    <title>TH1</title>
</head>

<body>
    <header class="headerContent">
        <h1>Các Loại hoa đẹp nhất Việt Nam</h1>
        <nav>
            <ul class="nav">
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?action=admin">Trang quản trị</a></li>
            </ul>
        </nav>
    </header>