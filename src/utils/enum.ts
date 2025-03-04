/**
 * 这个文件用来存各种enum喵
 * @author wniko
 */

/**
 * 地标类型
 */
export enum MapPointType {
  Empty = '',

  Cifu = 'cifu',
  Jiejing = 'pass',
  Portal = 'portal',
  SoulSite = 'soulsite',
  Shop = 'shop',
  NPC = 'npc',
  Map = 'map',
  Place = 'place',
  Lianji = 'lianji',
  Cave = 'cave',
  Wind = 'wind',
  Sword = 'sword',
  Temple = 'temple',

  BigBoss = 'bigboss',
  Boss = 'boss',
  LittleBoss = 'littboss',
  RedSoul = 'redsoul',
  Jingyingguai = 'jingying',

  Item = 'item',
  ImportantItem = 'impoitem',
  Stone = 'stone',
  GoldenSeed = 'goldseed',
  Ludi = 'ludi',
  ShengbeiLudi = 'sbludi',
  Key = 'key',
  Sigen = 'sigen',
  Bead = 'bead',
  Orchid = 'orchid',
  Material = 'material',

  Paint = 'paint',
  Gesture = 'gesture',

  Magic = 'magic',
  Weapon = 'weapon',
  Daogao = 'daogao',
  Clothes = 'clothes',
  Zhanhui = 'zhanhui',
  Guhui = 'guhui',
  Ring = 'ring',

  Text = 'text',
  Warn = 'warn',
  Question = 'question',
  Taoke = 'taoke',
}

/**
 * 讯息类型
 */
export enum ApothegmType {
  Empty = '',

  Feature = 'feature',
  Suggest = 'suggest',
  BugReport = 'bug',

  Strategy = 'strategy',
  Kokoroe = 'kokoroe',
  Ask = 'ask',

  Message = 'message',

  Water = 'water',
}

export enum SupportedLang {
  zhCN = 'zh-CN',
  zhTW = 'zh-TW'
}

export enum TranslateTargetLang {
  zhCN = 'zh-CN',
  zhTW = 'zh-TW',
  
}
