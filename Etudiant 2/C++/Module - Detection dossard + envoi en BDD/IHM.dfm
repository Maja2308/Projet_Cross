object Form1: TForm1
  Left = 0
  Top = 0
  Caption = 'Form1'
  ClientHeight = 562
  ClientWidth = 1020
  Color = cl3DLight
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'Tahoma'
  Font.Style = []
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 13
  object Resultat: TLabel
    Left = 8
    Top = 48
    Width = 98
    Height = 16
    Caption = 'Liste des courses'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -13
    Font.Name = 'Tahoma'
    Font.Style = []
    ParentFont = False
  end
  object BDDPanel: TLabel
    Left = 39
    Top = 14
    Width = 20
    Height = 13
    Caption = 'BDD'
    Color = clRed
    ParentColor = False
  end
  object Label1: TLabel
    Left = 8
    Top = 227
    Width = 83
    Height = 16
    Caption = 'Course choisie'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -13
    Font.Name = 'Tahoma'
    Font.Style = []
    ParentFont = False
  end
  object Label2: TLabel
    Left = 344
    Top = 48
    Width = 120
    Height = 16
    Caption = 'Nom des participants'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -13
    Font.Name = 'Tahoma'
    Font.Style = []
    ParentFont = False
  end
  object Panel: TPanel
    Left = 8
    Top = 8
    Width = 25
    Height = 25
    Color = clRed
    ParentBackground = False
    TabOrder = 0
  end
  object ListBox1: TListBox
    Left = 8
    Top = 67
    Width = 153
    Height = 102
    ItemHeight = 13
    TabOrder = 1
  end
  object ValiderCourse: TButton
    Left = 8
    Top = 175
    Width = 153
    Height = 25
    Caption = 'Valider ce choix'
    TabOrder = 2
    OnClick = ValiderCourseClick
  end
  object Memo1: TMemo
    Left = 8
    Top = 246
    Width = 153
    Height = 51
    TabOrder = 3
  end
  object ListBoxNom: TListBox
    Left = 344
    Top = 70
    Width = 129
    Height = 130
    ItemHeight = 13
    TabOrder = 4
  end
  object Memo2: TMemo
    Left = 907
    Top = 8
    Width = 105
    Height = 73
    TabOrder = 5
  end
  object ListBox3: TListBox
    Left = 800
    Top = 272
    Width = 129
    Height = 185
    ItemHeight = 13
    TabOrder = 6
  end
  object Timer1: TTimer
    OnTimer = Timer1Timer
    Left = 872
    Top = 8
  end
end
