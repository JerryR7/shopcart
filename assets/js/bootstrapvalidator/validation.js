$(document).ready(function() {
  $('#orderForm').bootstrapValidator({
    excluded: ':disabled',
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
      buy_lastname: {
        validators: {
          notEmpty: {
            message: '請輸入姓氏'
          }
        }
      },
      buy_firstname: {
        validators: {
          notEmpty: {
            message: '請輸入名子'
          }
        }
      },
      account: {
        validators: {
          notEmpty: {
            message: '請輸入帳號。'
          },
          stringLength: {
            min: 6,
            message: '需要6位字元。'
          },
          regexp: {
            regexp: /^[a-zA-Z0-9_]+$/,
            message: '帳號只能是英文字母和數字。'
          }
        }
      },
      pass1: {
        validators: {
          notEmpty: {
            message: '請輸入密碼。'
          },
          stringLength: {
            min: 6,
            message: '需要6位字元。'
          },
        }
      },
      cpass1: {
        validators: {
          notEmpty: {
            message: '請輸入密碼。'
          },
          stringLength: {
            min: 6,
            message: '需要6位字元。'
          },
          identical:{
            field: 'pass1',
            message: '請輸入相同的密碼。'
          }
        }
      },
      email: {
        validators: {
          notEmpty: {
            message: '請填寫EMAIL。'
          }
        }
      },
      edu: {
        validators: {
          notEmpty: {
            message: '請選擇學歷。'
          }
        }
      },
      sex: {
        validators: {
          notEmpty: {
            message: '請選擇性別。'
          }
        }
      },
      company: {
        validators: {
          stringLength: {
            min: 0,
            message: '需要10位數字。'
          }
        }
      },
      sex: {
        validators: {
          notEmpty: {
            message: '請選擇性別。'
          }
        }
      },
      tel1: {
        validators: {
          digits: {
            message: '請輸入正確的格式(數字)。'
          },
          stringLength: {
            min: 10,
            message: '需要10位數字。'
          }
        }
      },
      tel2: {
        validators: {
          digits: {
            message: '請輸入正確的格式(數字)。'
          },
          stringLength: {
            min: 8,
            message: '需要8位數字。'
          }

        }
      },
      address: {
        validators: {
          stringLength: {
            min: 0,
            message: '需要10位數字。'
          }
        }
      },
      agress: {
        validators: {
          notEmpty: {
            message: '閱讀後且同意才能註冊喔。'
          }
        }
      },
    }
  });
  $('#loginForm').bootstrapValidator({
    message: 'This value is not valid',
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
      username: {
        validators: {
          notEmpty: {
            message: '請輸入帳號。'
          },
          stringLength: {
            min: 6,
            message: '需要6位字元。'
          },
          regexp: {
            regexp: /^[a-zA-Z0-9_]+$/,
            message: '帳號只能是英文字母和數字。'
          }
        }
      },
      password: {
        validators: {
          notEmpty: {
            message: '請輸入密碼。'
          },
          stringLength: {
            min: 0,
            message: '需要6位字元。'
          },
        }
      },
    }
  });
  $('#forgetFrom').bootstrapValidator({
    message: '請輸入有效的值。',
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
      username: {
        validators: {
          notEmpty: {
            message: '請輸入帳號。'
          },
          stringLength: {
            min: 6,
            message: '需要6位字元。'
          },
          regexp: {
            regexp: /^[a-zA-Z0-9_]+$/,
            message: '帳號只能是英文字母和數字。'
          }
        }
      },
      email: {
        validators: {
          notEmpty: {
            message: '請填寫EMAIL。'
          }
        }
      },
    }
  });
});
