object Form1: TForm1
  Left = 0
  Top = 0
  Caption = 'Form1'
  ClientHeight = 299
  ClientWidth = 635
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'Tahoma'
  Font.Style = []
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 13
  object Memo1: TMemo
    Left = 95
    Top = 18
    Width = 152
    Height = 63
    TabOrder = 0
  end
  object Button1: TButton
    Left = 8
    Top = 16
    Width = 81
    Height = 25
    Caption = 'GetDateTime'
    TabOrder = 1
    OnClick = Button1Click
  end
  object Memo2: TMemo
    Left = 336
    Top = 18
    Width = 145
    Height = 63
    TabOrder = 2
  end
  object Button2: TButton
    Left = 487
    Top = 18
    Width = 75
    Height = 25
    Caption = 'GetTime'
    TabOrder = 3
    OnClick = Button2Click
  end
  object Buttontime: TButton
    Left = 8
    Top = 56
    Width = 81
    Height = 25
    Caption = 'Buttontime'
    TabOrder = 4
    OnClick = ButtontimeClick
  end
  object Buttontimezero: TButton
    Left = 88
    Top = 240
    Width = 83
    Height = 25
    Caption = 'Buttontimezero'
    TabOrder = 5
    OnClick = ButtontimezeroClick
  end
  object Buttontime1: TButton
    Left = 406
    Top = 240
    Width = 75
    Height = 25
    Caption = 'ButtontimeUn'
    TabOrder = 6
    OnClick = Buttontime1Click
  end
  object Memo3: TMemo
    Left = 200
    Top = 224
    Width = 185
    Height = 41
    Lines.Strings = (
      '')
    TabOrder = 7
  end
end
